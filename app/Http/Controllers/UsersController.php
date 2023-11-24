<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }
    public function show($user){
        return view('users.show',['user'=> $user]);
    }
}