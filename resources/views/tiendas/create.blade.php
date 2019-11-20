@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="{{route('newTienda')}}" method="post">
    @csrf
    Nombre:<br>
    <input type="text" name="name" placeholder="name">
    <input type="text" name="descripcion" placeholder="descripcion">
    <input type="password" name="password" placeholder="password">
    <input type="email" name="email" placeholder="email">
    <input type="number" name="likes" step="1" placeholder="likes">
    <br><br>
    @if(isset($errors))
    	@foreach($errors->all() as $error)
    		<div style="color:tomato;font-weight: bold;">{{$error}}</div>
    	@endforeach
    @endif
    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
