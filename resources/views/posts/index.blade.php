@extends('layouts.plantilla')

@section('title', 'Publicacion ')

@section('content')
    <h1>Aquí se mostrarán las publicaciones</h1>
    <!--<a href=" route('posts.create')">Crear publicación</a>-->
    <!-- Botón de paginación -->
    <div class="container">
        <ul>
            @foreach ($posts as $post)
                <li>{{$post -> title}}</li>
            @endforeach
        </ul>
    </div>

    {{$posts->links()}}
@endsection