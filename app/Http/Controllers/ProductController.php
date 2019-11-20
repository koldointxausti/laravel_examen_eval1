<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductController extends Controller
{
    public function index(){
    	$productos = Producto::all();
    	return view('productos.index',['productos'=>$productos]);
    }
}
