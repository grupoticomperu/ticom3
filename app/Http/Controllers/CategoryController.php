<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEmpresaRequest;

class CategoryController extends Controller
{
    public function show(){
        $categories =Category::all();
        return view('categories.show', compact('categories'));
    }

    public function showepc(Category $category){
        return view('categories.showepc', compact('category'));
    }

    public function showempresa(User $busine){

        return view('categories.showempresa', compact('busine'));
    }

    public function aboutempresa(User $busine){

        return view('categories.aboutempresa', compact('busine'));
    }

    public function contactempresa(User $busine){

        return view('categories.contactempresa', compact('busine'));
    }


    public function showproductos(){
       // $id = Auth::user()->id;
        // $user = 1;
        //$products = Product::where('user_id', $id)->get();
        //return $products;
        return view('products.show');
    }


    public function showpedidos(){
        // $id = Auth::user()->id;
         // $user = 1;
         //$products = Product::where('user_id', $id)->get();
         //return $products;
         return view('pedidos.show');
     }

    public function miempresa(){
        // $user = 1;
        $empresa = Auth::user()->id;
        //return $empresa;
         $user = User::where('id', $empresa)->get();
        //return  $user;
         return view('miempresa.show', compact('user'));
     }

     public function miscategorias(){
        // $user = 1;
        $user = Auth::user();
        //return $empresa;
       //  $user = User::where('id', $empresa)->get();
       //  dd($user->categories);
        //return  $user;
        $categories = Category::all();
         return view('miempresa.miscategoriass', compact('user', 'categories'));
     }




     public function edit(){
        $user = Auth::user();
        $categories = Category::all();

    	return view('miempresa.miscategorias', compact('categories','user'));
    }


    public function editd(User $user){

        $categories = Category::all();

    	return view('miempresa.miscategoriasd', compact('categories','user'));
    }




     public function update(User $user, StoreEmpresaRequest $request)
     {

        $user->update($request->only('razonsocial', 'description'));
        //$categorium->update($request->only('nombre'));

/*         User::update([
            $user->razonsocial  => $request->get('razonsocial'),
            $user->description => $request->get('description')
        ]);
 */
        $user->syncCategories($request->get('categories'));

     }

     public function updated(User $user, StoreEmpresaRequest $request)
     {

        $user->update($request->only('razonsocial', 'description'));
        //$categorium->update($request->only('nombre'));

/*         User::update([
            $user->razonsocial  => $request->get('razonsocial'),
            $user->description => $request->get('description')
        ]);
 */
        $user->syncCategories($request->get('categories'));

     }


}
