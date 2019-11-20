@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="" method="post">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <input type="text" name="descripcion">
    <input type="password" name="password">
    <input type="email" name="email">
    <input type="number" name="likes" step="1">
    <br><br>

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
