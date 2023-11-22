@extends('layouts.plantilla')

@section('title', 'Categoría ' . $category)
    
@section('content')
    <h1>Bienvenido al la categoría: {{$category}}</h1>
@endsection