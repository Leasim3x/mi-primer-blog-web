<?php
// MÉTODO "__invoke()" PARA ADMINISTRAR UNA ÚNICA RUTA
// Lugar donde se encuentra el archivo
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// Para CRUD
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Serie de metodos para administrar las rutas
    public function __invoke(){
        /* Return view('welcome);*/
        return view('home');// Retorda vista
    }
}
