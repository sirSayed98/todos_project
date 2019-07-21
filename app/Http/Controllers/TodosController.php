<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;

class TodosController extends Controller
{

    public function index(){


        return view('todos.index')->with('todos',todos::all());
    }



  
    public function show($todoId){


        return view('todos.show')->with('data',todos::find($todoId));
    }


}
