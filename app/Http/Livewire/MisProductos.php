<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class MisProductos extends Component
{

    use WithPagination;
    //public $products;

    public function mount(){

    }

    public function render()
    {

        $id = Auth::user()->id;
        $products = Product::where('user_id', $id)->paginate(4);
        return view('livewire.mis-productos', compact('products'));
    }
}
