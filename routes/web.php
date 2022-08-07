<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('misproductos', [CategoryController::class, 'showproductos'])->name('showproductos'); 

Route::get('miempresa', [CategoryController::class, 'miempresa'])->middleware('auth')->name('miempresa');
Route::get('miscategorias', [CategoryController::class, 'miscategorias'])->middleware('auth')->name('miscategorias');

Route::get('miscategorias/{user}', [CategoryController::class, 'edit'])->middleware('auth')->name('miscategoriasa');
/* Route::get('miscategoriasd/{user}', [CategoryController::class, 'editd'])->middleware('auth')->name('miscategoriasd'); */

Route::put('miempresa/{user}', [CategoryController::class, 'update'])->middleware('auth')->name('miscategoriasupdate');
/* Route::put('miempresad/{user}', [CategoryController::class, 'updated'])->middleware('auth')->name('miscategoriasupdated'); */


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
