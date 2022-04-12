<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    //
    public function index(){
        $todos = Todo::all();
        // return view('Todos.index')->with('todos', $todos);
        return view('Todos.index', compact('todos'));
        // return $todos;
    }

    public function show($todoId){
        $todo = Todo::find($todoId);
        return view('Todos.show', compact('todo'));
        // return $todo;
    }

    public function create(){
        return view('Todos.create');
    }

    public function store(){

        $this->validate(request(),[
            'name'=>'required|min:6|max:12',
            'description'=> 'required',
        ]);

        $data = request()->all();
        
        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = $data['completed'];
        // $todo->completed = false;
        $todo->save();
        return redirect('/todos');
    }
}
