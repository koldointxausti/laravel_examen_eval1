@extends('layouts.app')

@section('title', 'Tienda')

@section('content')

  <h2>Has introducido la siguiente tienda</h2>

  <h3>Id: {{$id}}</h3>
  <h3>Nombre: {{$name}}</h3>
  <h3>Descripcion: {{$descripcion}}</h3>
  <h3>Password: {{$password}}</h3>
  <h3>Email: {{$email}}</h3>
  <h3>Likes: {{$likes}}</h3>

@endsection