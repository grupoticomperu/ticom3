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

        $category = $product->item;
        $productrelacionado = Product::where('item_id',$category->id )
                                        ->where('id','<>', $product->id )->get();

        //dd($productrelacionado);
        $cant = $productrelacionado->count();

        if($cant > 4)
        {
            $cant = 4;
        }

        return view('products.showproducto', compact('product', 'productrelacionado', 'cant'));

    }
}
