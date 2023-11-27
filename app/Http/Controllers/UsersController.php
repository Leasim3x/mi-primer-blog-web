<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Models\Users;

use User;

class UsersController extends Controller
{
    //

    public function index(){
        $users = User::all();
        return view('users', compact('users'));
    }

    public function create(RoleRequest $request){
        $user = new User;
        $user->nombre= $request -> nombre;
        $user->save();
        return redirect('users')-> with('message', 'Usuario creado con exito');
    }

    public function show($user){
        return view('users.show',['user'=> $user]);
    }


    // Validar y procesar los datos del formulario aquí
    public function procesarFormulario(Request $request)
    {
        // Validar y procesar los datos del formulario aquí
        $nombre = $request->input('name');
        $apellido = $request->input('last_name');
        $email = $request->input('email');
        $contrasena = $request->input('pass');

        // Eloquent ORM para insertar datos en la tabla usuarios
        User::create([
            'name' => $nombre,
            'last_name' => $apellido,
            'email' => $email,
            'password' => $contrasena,
        ]);

        return "Registro exitoso";
    }
}