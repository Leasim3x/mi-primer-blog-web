@extends('layouts.plantilla')

@section('title', 'Mostrar comentario'. $comment)
    
@section('content')
    <h1>Aquí se podrá ver el comentario de: {{$comment}}</h1>
@endsection