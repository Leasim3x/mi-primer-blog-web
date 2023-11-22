<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Creacion de 3 métodos
    // "Index" método encargado de la página principal
    public function index(){
        // nombre_carpeta.método
        return view('cursos.index');
    }
    // Método para la creación
    public function create(){
        return view('cursos.create');
    }
    // Método para mostrar un objeto en particular
    public function show($curso){
        // nombre_carpeta.método, [array]
        return view('cursos.show',['curso'=> $curso]);
    }
}
/* Cuando la nombre_variable coicide con 
        el nombre_variable que se esta recibiendo
        se puede optar por el siguiente código...
        compact('curso') */