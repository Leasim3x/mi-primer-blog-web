<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // Método para la creación
    public function create(){
        return view('comments.create');
    }
    // Método para mostrar un objeto en particular
    public function show($comment){
        // nombre_carpeta.método, [array]
        return view('comments.show',['comment'=> $comment]);
    }
}
