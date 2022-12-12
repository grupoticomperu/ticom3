<?php

namespace App\Http\Livewire;

use App\Models\Product;

use Livewire\Component;
use App\Models\Distrito;
use App\Models\Provincia;
use Illuminate\Support\Str;
use App\Models\Departamento;
use App\Models\Item;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class EditProductsd extends Component
{


    use WithFileUploads;
    public $product;
    public $name, $slug, $shortdescription,$longdescription,$order,$title,$description,$keywords,$state;
    public $items, $item_id="", $typecurrency, $price, $priceoffer, $newused, $datasheet, $datasheetback, $stock;


    public function mount(Product $product){
        $activado = 1;
        $desactivado = 0;
        //$this->product = $product;
       // $this->identificador=rand();
        $this->items = Item::all();
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->shortdescription = $product->shortdescription;
        $this->longdescription = $product->longdescription;
        $this->order = $product->order;
        $this->title = $product->title;
        $this->description = $product->description;
        $this->keywords = $product->keywords;
        $this->state = $product->state;
        if($product->item_id == NULL)
            $this->item_id = "";
        else
            $this->item_id = $product->item_id;

        $this->typecurrency = $product->typecurrency;
        $this->price = $product->price;
        $this->priceoffer = $product->priceoffer;
        $this->newused = $product->newused;
       // $this->datasheet = $product->datasheet;
        $this->datasheetback = $product->datasheet;
        $this->stock = $product->stock;
        $this->order = $product->order;


    }



    public function updatedName($value){
        //$this->slug = Str::slug($value);
        if(Auth::user()->razonsocial){
            $slug = $value." ".Auth::user()->razonsocial." ".Str::random(3);
        }else{
            $slug = $value." ".Auth::user()->name." ".Str::random(3);
        }

        $this->slug = Str::slug($slug);
    }


    protected $rules = [
        'name'=> 'required',
        'slug'=> 'required',
        'shortdescription'=>'required|min:3',
        'longdescription'=>'required|min:3',
        'order'=> 'min:1',
        //'title'=> 'min:2',
        //'description'=> 'min:5',

        'keywords'=> 'min:5',
        'state'=> 'required',
        'item_id'=> 'required',
        'stock'=>'',
    ];


    public function save(){

        /* $this->rules['product.slug'] = 'required|unique:products,slug,'.$this->product->id; */
       // $this->rules['name'] = 'required|unique:products,name,'.$this->product->id;
        $this->rules['slug'] = 'required|unique:products,slug,'.$this->product->id;

        if($this->datasheet){
            $rules['datasheet'] ='max:2048';
            $this->validate($rules);
            //Storage::delete([$this->product->brochure]);
            //$brochure = $this->brochure->store('brochureproducts', 'public');
            //$urlbrochure = Storage::url($brochure);
            Storage::disk('s3')->delete([$this->product->datasheet]);
            $urldatasheet = Storage::disk('s3')->put('brochureproducts', $this->datasheet , 'public');
        }
        else {
            $this->validate();
            $urldatasheet = null;
        }




        $this->validate();

/*         if($this->image){
            Storage::delete([$this->product->image]);
            $this->product->image = $this->image->store('products', 'public');
        } */

       /*  $this->product->save();*/

        $this->product->update([
            'name' => $this->name,
            'slug' => $this->slug,
            'typecurrency' => $this->typecurrency,
            'price' => $this->price,
            'priceoffer' => $this->priceoffer,
            'newused' => $this->newused,
            'datasheet' => $urldatasheet,
            'stock' => $this->stock,
            'shortdescription' => $this->shortdescription,
            'longdescription' => $this->longdescription,
            'order' => $this->order,
            'title' => $this->name,
            'description' => $this->shortdescription,
            'keywords' => $this->keywords,
            'state' => $this->state,
            'item_id' => $this->item_id
        ]);

       // $this->reset('image');
        //$this->identificador = rand();
       // $this->emitTo('show-posts', 'render');
       $this->reset(['name','slug','shortdescription','longdescription']);
       $this->emit('alert','El Registro se actualizo correctamente');
       return redirect()->route('showproductos');
      //$this->emit('alert','El registro se modifico correctamente');


    }



    public function render()
    {
        return view('livewire.edit-productsd');
    }
}
