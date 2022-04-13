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

    public function show(Todo $todo){
        // $todo = Todo::find($todoId);
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

        session()->flash('success', 'Todo created successfully');

        return redirect('/todos');
    }

    public function edit(Todo $todo){
        // $todo = Todo::find($todoId);
        return view('Todos.edit', compact('todo'));
    }

    public function update(Todo $todo){
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

        $data = request()->all();

        // $todo = Todo::find($todoId);

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = $data['completed'];

        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/todos');
    }

    public function distroy(Todo $todo){
        // $todo = Todo::find($todoId);
        $todo->delete();
        session()->flash('success', 'Todo deleted successfully');
        return redirect('/todos');
    }

    public function complete(Todo $todo){
        $todo->completed = true;
        $todo->save();
        session()->flash('success', 'Todo Completed successfully');
        return redirect('/todos');
    }
}
