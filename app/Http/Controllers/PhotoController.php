<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;
use Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PhotoController extends Controller
{
    public function store(Product $product, Request $request)
    {
    	
    	$this->validate(request(), [
    		'file' => 'required|image|max:2048'
    	]);

        //return "imagen cargada";
        //$nombre = $request->file('file')->getClientOriginalName();
        $empresa = Auth::user()->razonsocial;
        $aleatorio = Str::random(10);
        $nombre = Str::slug($product->name." ".$empresa." ".$aleatorio).".jpg";
        $ruta = storage_path().'\app\public\products/'. $nombre;

        $marcadeagua = Image::make($request->file('file'));
        $marcadeagua->resize(400, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
        $logo = storage_path().'\app\public\products/'. 'logo.png';
        $marcadeagua->insert($logo, 'bottom-right',10,10);
        $marcadeagua->save($ruta);

    	////$photo = $request->file('file')->store('public/products');
        //return $photo;
        //$photo  tiene el valor de: public/dffffffffjhsahasgk.jpg
        //si quieres mostrar la imagen con esta ruta da error
        //$photoUrl = $photo->store('public');
        //$photoUrl  tiene el valor de: public/dffffffffjhsahasgk.jpg
        //si quieres mostrar la imagen con esta ruta da error
        //le aplicamos: php artisan storage:link
        //storage link hace que sea publico la carpeta storage

       //$photoUrl = Storge::url($photo);
       //$photoUrl  tiene el valor de: /storage/dffffffffjhsahasgk.jpg
       //en la tabla guardamos esta ruta /storage/dffffffffjhsahasgk.jpg
       //para mostrar la imagen debemos llamar a esta ruta
        //return request()->file('photo')->store('posts','public');

       /* $post->photos()->create([

            'url' => request()->file('photo')->store('posts','public'),
        ]);
        */

    	Photo::create([
    	   	//'url' => Storage::url($nombre),
            'url'=>'/storage/products/'.$nombre,
            //    'url' =>request()->file('photo')->store('public'),
            //    'url' => request()->file('photo')->store('posts','public');
    		'product_id' => $product->id

    	]);
    }





      public function destroy(Photo $photo)
      {
          $photo->delete();
  
          /*Storage::disk('public')->delete($photo->url);*/
          
          $photoPath = str_replace('storage','public',$photo->url);
          //para eliminar cambiamos storage por public ya qye la imagen esta almacenada en 
          //la carpeta public y no en la ca´peta storage 
          Storage::delete($photoPath);
  
          //return back()->with('flash','Foto Eliminada');
  
      }
  

}
