<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Category;
use App\Models\Distrito;
use App\Models\Provincia;
use Illuminate\Support\Str;
use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MiEmpresa extends Component
{
    public $razonsocial, $slug, $description, $empresa, $categories;
    public $categoriess;
    public $departments, $provincias = [], $distritos = [];

    public $department_id = "", $city_id = "", $district_id = "";


    public function mount(){

        $this->empresa = User::findOrFail(Auth::user()->id);

       // $this->empresa = new User();
        //echo gettype($this->empresa);
       // $this->empresa = Auth::user();

        $this->razonsocial = $this->empresa->razonsocial;
        $this->slug = $this->empresa->slug;
        $this->description = $this->empresa->description;
        $this->categories = Category::all();

        $this->departments = Departamento::all();
    }

    protected $rules = [
        'razonsocial'=> 'required|unique:users,razonsocial',
        'slug'=> 'required',
        'description'=>'required|min:1',
    ];






    public function updatedDepartmentId($value){
        $this->provincias = Provincia::where('departamento_id', $value)->get();

        $this->reset(['city_id', 'district_id']);
        }



    public function updatedCityId($value){

            $city = Provincia::find($value);

            $this->distritos = Distrito::where('provincia_id', $value)->get();

            $this->reset('district_id');
        }








    public function updatedRazonsocial($value){
        $this->slug = Str::slug($value);
    }

    public function save(){

     /*  $this->rules['category.slug'] = 'required|unique:categories,slug,'.$this->category->id;  */

         $this->rules['razonsocial'] = 'required|unique:users,razonsocial,'.$this->empresa->id;
         $this->rules['slug'] = 'required|unique:users,slug,'.$this->empresa->id;

        $this->validate();

        /*  $this->empresa->save(); */
       // return 8;

        //return $this->empresa;


       // dd($this->categoriess);






        $this->empresa->update([
            'razonsocial' => $this->razonsocial,
            'slug' => $this->slug,
            'description' => $this->description

        ]);

        //$this->empresa->syncCategories($request->get('categoriess'));
       // $this->empresa->categories()->attach($this->categoriess);



       // $this->reset('image');
        //$this->identificador = rand();
       // $this->emitTo('show-posts', 'render');
       //$this->reset(['razonsocial','slug','description']);
       $this->emit('alert','Los datos de tu Empresa se actualizaron correctamente');
      // return redirect()->route('admin.categories.index');


    }





    public function render()
    {
        return view('livewire.mi-empresa');
    }
}
