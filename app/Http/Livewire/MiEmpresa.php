<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class MiEmpresa extends Component
{
    public $razonsocial, $slug, $description, $empresa, $categories;
    public $categoriess;


    public function mount(){
  
        $this->empresa = User::findOrFail(Auth::user()->id);
       
       // $this->empresa = new User();
        //echo gettype($this->empresa);
       // $this->empresa = Auth::user();

        $this->razonsocial = $this->empresa->razonsocial;
        $this->slug = $this->empresa->slug;
        $this->description = $this->empresa->description;
        $this->categories = Category::all();
    }

    protected $rules = [
        'razonsocial'=> 'required|unique:users,razonsocial',
        'slug'=> 'required',
        'description'=>'required|min:1',
    ];  


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
       //$this->emit('alert','La Categoria se actualizo correctament');
      // return redirect()->route('admin.categories.index');


    } 


    


    public function render()
    {
        return view('livewire.mi-empresa');
    }
}
