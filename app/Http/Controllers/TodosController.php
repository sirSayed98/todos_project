<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;

class TodosController extends Controller
{

    public function index()
    {


        return view('todos.index')->with('todos', todos::all());
    }




    public function show($todoId)
    {


        return view('todos.show')->with('data', todos::find($todoId));
    }


    public function create()
    {


        return view('todos.create');
    }

    public function store()
    {


        $this->validate(request(), [
            'name' => 'required|min:5|max:20',
            'describtion' => 'required'
        ]);


        $data = request()->all();

        $todo = new todos();

        $todo->name = $data['name'];
        $todo->describtion = $data['describtion'];

        $todo->compleated = false;
        $todo->save();

        return redirect('/todos');
    }

    public function edit($id)
    {
        return view('todos.edit')->with('update', todos::find($id));
    }

    public function Update($id)
    {


        $this->validate(request(), [
            'name' => 'required|min:5|max:20',
            'describtion' => 'required'
        ]);

        $data = request()->all();
        $todo_edit = todos::find($id);
        $todo_edit->name = $data['name'];
        $todo_edit->describtion = $data['describtion'];
        $todo_edit->save();
        return redirect('/todos');
    }

    public function delete($id)
    {

        $todo=todos::find($id);

        $todo->delete();
        return redirect('/todos');


     }
}
