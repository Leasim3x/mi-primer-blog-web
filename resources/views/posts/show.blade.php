<!-- Extension de la plantilla -->
@extends('layouts.plantilla')

@section('title', 'Publicacion ' . $post)

@section('content')
    <h1>Aquí se mostrarán las publicaciones de {{$post}}</h1>
@endsection