<?php

namespace App\Http\Livewire;

use App\Models\Solicitud;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class MisPedidos extends Component
{


    use WithPagination;
    public $product, $state;
    public $search;
    public $sort='id';
    public $direction='desc';
    public $cant='10';


    protected $queryString = [
        'cant'=>['except'=>'10'],
        'sort'=>['except'=>'id'],
        'direction'=>['except'=>'desc'],
        'search'=>['except'=>''],
    ];


    public function mount(){
        $this->solicitud = new Solicitud();
    }


    public function updatingSearch(){
        $this->resetPage();
        //RESETEA la paginación,
    }


   /*  protected $rules = [
        'state'=>'',
     ]; */


    public function activar(Solicitud $pedido){
        $this->solicitud = $pedido;
        //dd($productt);
        $this->solicitud->update([
            'state' => 1
        ]);
    }

    public function desactivar(Solicitud $pedido){
        $this->solicitud = $pedido;
        //dd($productt);
        $this->solicitud->update([
            'state' => 0
        ]);
    }


    public function order($sort){
        if($this->sort == $sort){
            if($this->direction == 'desc'){
                $this->direction = 'asc';
            }else{
                $this->direction = 'desc';
            }
        }else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }

    }


    public function render()
    {

        $id = Auth::user()->id;
       /*  $products = Product::where('user_id', $id)->paginate(4);
        return view('livewire.mis-productos', compact('products')); */



        $solicitudes = Solicitud::where('name', 'like', '%' .$this->search. '%')
            ->where('user_id', $id)
            ->orderBy($this->sort, $this->direction)
            ->paginate($this->cant);


        return view('livewire.mis-pedidos', compact('solicitudes'));



    }



}
