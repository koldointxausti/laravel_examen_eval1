<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    public function tienda(){
    	return $this->belongsTo('App\Tienda');
    }
}
