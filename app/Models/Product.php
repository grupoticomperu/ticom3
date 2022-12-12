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

    const SOLES = 1;
    const DOLARES = 2;
    const EUROS = 3;

    const NUEVO = 1;
    const USADO = 2;

    public function getRouteKeyName()
    {
    	return 'slug';
    }




    //de uno a muchos
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

     //Relacion uno a muchos inversa
    public function item(){
        return $this->belongsTo('App\Models\Item');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }



}
