<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Photo;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    const PRODUCTO = 1;
    const SERVICIO = 2;


    //de uno a muchos
    public function photos()
    {
        return $this->hasMany(Photo::class);  
    }

  /*   //Relacion uno a muchos
    public function products(){
        return $this->hasMany('App\Models\Product');
    } */



}
