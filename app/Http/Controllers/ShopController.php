<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tienda;

class ShopController extends Controller
{
    public function show(){
    	return view('tiendas.show');
    }
    public function create(){
    	return view('tiendas.create');
    }
    public function newTienda(Request $request){
    	$validacion = $request->validate([
    		'name'=>'required|min:2|max:20',
    		'email'=>'required|email',
    		'password'=>'required|min:8|max:10|regex:/^[0-9A-Za-z]+/',
    		'likes'=>'required|regex:/[1-9]+/'
    	]);
    	$tienda = new Tienda;
    	$tienda->name = $request->name;
    	$tienda->descripcion = $request->descripcion;
    	$tienda->password = $request->password;
    	$tienda->email = $request->email;
    	$tienda->likes = intval($request->likes);
    	$tienda->save();
    	return view('tiendas.show',[
    		'id'=>$tienda->id,
    		'name'=>$tienda->name,
    		'descripcion'=>$tienda->descripcion,
    		'password'=>$tienda->password,
    		'email'=>$tienda->email,
    		'likes'=>$tienda->likes,
    	]);
    }
}
