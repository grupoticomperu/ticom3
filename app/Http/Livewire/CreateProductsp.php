<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CreateProductsp extends Component
{
    public $open = false;
    public $tipo, $name;


    public function mount(){
        //$this->user_id = User::findOrFail(Auth::user()->id);
        $this->user_id = Auth::user()->id;
        //dd($this->user_id);

    }




    protected $rules = [
        'tipo'=> 'required',
        'name'=> 'required|min:3',
    ];



    public function save(){
        $this->validate();

        $product = Product::create([
            'tipo' => $this->tipo,
            'name' => $this->name,
            'slug' => $this->name,
            'user_id' => $this->user_id,

        ]);

        $this->reset(['open','tipo','name']);

        /*$this->reset('open','title','content','image'); */
        // $this->reset(['open','title','content','image']);
      
       // $this->emitTo('show-posts', 'render');
        //$this->emit('render');
        //$this->emit('alert','El post se creo correctament');
        return redirect()->route('products.editd', $product);
    }



    public function render()
    {
        return view('livewire.create-productsp');
    }
}
