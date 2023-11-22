<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories.index');
    }
    public function create(){
        return view('categories.create');
    }
    public function show($category){
        return view('categories.show',['category'=> $category]);
    }
}
