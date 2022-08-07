<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Category;

class ShowCategories extends Component
{
    public $search='';
    public $sort='id';
    public $direction='desc';
    public $cant='10';

    use WithPagination;

   // public $state;



    protected $queryString = [
        'cant'=>['except'=>'10'],
        'sort'=>['except'=>'id'],
        'direction'=>['except'=>'desc'],
        'search'=>['except'=>''],
    ];



    /* cada vez que se modifique search ejecutara resetpage */
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
         $categories = Category::where('name', 'like', '%' . $this->search . '%')
                                ->where('state', 1)
                                ->orderBy($this->sort, $this->direction)
                                ->paginate($this->cant);
        return view('livewire.show-categories', compact('categories'))->layout('layouts.admin'); 
       
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


}