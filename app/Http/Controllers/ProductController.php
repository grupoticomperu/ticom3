<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        //$productos = Product::all();
        //
        return view('products.list');
    }

    public function verproducto(Product $product){

        return view('products.showproducto', compact('product'));
    }
}
