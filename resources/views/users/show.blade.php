@extends('layouts.plantilla')

@section('title', 'Mostrar perfil de ' . $user)

@section('content')
    <h1>Aquí se mostrarán el perfil de: {{$user}}</h1>
@endsection