<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MisCategorias extends Component
{
    
    public $categories, $empresa, $user;

    public $editForm = [
        //'name' => null,
        'categories' => [],
    ];




    protected $validationAttributes = [

        'editForm.categories' => 'categorias'
    ];




    public function getCategories(){
        $this->categories = Category::all();
    }

    public function mount(User $user){

        //dd($user);
        $user = Auth::user();
        $this->user = $user;
        //$this->empresa = Auth::user()->id;
        //$user = User::where('id', $this->empresa)->get();
        //dd($user);
        $this->getCategories();

        //$this->editForm['name'] = $user->name;
        //dd($user->categories->pluck('id'));
        
        $this->editForm['categories'] = $user->categories->pluck('id'); 

        //$this->categories = Category::all();
        //dd($this->categories);

      //  $this->categoriess = $user->categories->pluck('id');
        //$this->editForm['brands'] = $category->brands->pluck('id');


    }


 
    public function render()
    {
         
       // return $categories;
        return view('livewire.mis-categorias');
    }

    public function update()
    {
       // $this->user->syncCategories($this->categories);

        //$this->category->brands()->sync($this->editForm['brands']);
        $this->user->categories()->sync($this->editForm['categories']);
        $this->getCategories();
    }
}
