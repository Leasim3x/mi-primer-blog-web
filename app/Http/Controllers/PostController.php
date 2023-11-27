<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        // Variable colección en la vista Post
        $posts = Post::paginate();

        return view('posts.index', compact('posts'));
    } 
    // Creación de los métodos Create y Show
    public function create(){
        //view(carpeta.archivo)
        return view('posts.create');
    }

    public function show($post){
        return view('posts.show',compact('post'));
    }
}