<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\CreateProducts;
use App\Http\Livewire\EditProducts;
use App\Http\Livewire\EditProductsd;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BusinessController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
//HomeController no necesita poner un metodo porque tiene al unico metodo llamado __invoque

Route::get('categorias', [CategoryController ::class, 'show'])->name('showcategories');
//Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categorias/{category}', [CategoryController::class, 'showepc'])->name('showepc');
Route::get('empresa/{busine}', [CategoryController::class, 'showempresa'])->name('showempresa');

Route::get('nosotrosempresa/{busine}', [CategoryController::class, 'aboutempresa'])->name('aboutempresa');
Route::get('contactoempresa/{busine}', [CategoryController::class, 'contactempresa'])->name('contactempresa');

Route::get('productos', [ProductController::class, 'list'])->name('listproducts');
Route::get('producto/{product}', [ProductController::class, 'verproducto'])->name('verproducto');
Route::get('empresas', [BusinessController::class, 'list'])->name('listbusiness');

Route::group([
    'prefix' =>'user',
    'middleware' => 'auth'],
function(){

/* Route::prefix("user")->group(function(){ */

    Route::get('misproductos', [CategoryController::class, 'showproductos'])->name('showproductos');
    Route::get('mispedidos', [CategoryController::class, 'showpedidos'])->name('showpedidos');
    Route::get('miempresa', [CategoryController::class, 'miempresa'])->name('miempresa');
    Route::get('miscategorias', [CategoryController::class, 'miscategorias'])->name('miscategorias');

    //Route::get('miscategorias/{user}', [CategoryController::class, 'edit'])->name('miscategoriasa');
    Route::get('miscategoriasa', [CategoryController::class, 'edit'])->name('miscategoriasa');
    /* Route::get('miscategoriasd/{user}', [CategoryController::class, 'editd'])->name('miscategoriasd'); */

    Route::put('miempresa/{user}', [CategoryController::class, 'update'])->name('miscategoriasupdate');
    //Route::put('miempresa', [CategoryController::class, 'update'])->name('miscategoriasupdate');
    /* Route::put('miempresad/{user}', [CategoryController::class, 'updated'])->name('miscategoriasupdated'); */

     Route::get('misproductos/create', CreateProducts::class)->name('products.create');
    // Route::get('misproductos/edit', CreateProducts::class)->name('products.create');
    Route::get('editproducts/{product}', EditProducts::class)->name('products.edit');
    Route::get('editproductsd/{product}', EditProductsd::class)->name('products.editd');

    /*Route::post('products/{product}/photos', 'PhotoController@store')->name('products.photos.store'); */

    Route::post('products/{product}/photos', [PhotoController::class, 'store'])->name('products.photos.store');
    Route::delete('products/{photo}', [PhotoController::class, 'destroy'])->name('products.photos.destroy');

});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
