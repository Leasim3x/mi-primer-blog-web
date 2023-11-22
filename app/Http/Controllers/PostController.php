<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Creación de los métodos Create y Show
    public function create(){
        //view(carpeta.archivo)
        return view('posts.create');
    }

    public function show($post){
        return view('posts.show',compact('post'));
    }
}
