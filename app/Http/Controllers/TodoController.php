<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $todos = auth()->user()->todos;

        return view('todo.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        return view('todo.show', compact('todo'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store()
    {
        $this->validate(
            request(), 
            [
                'title' => 'required'
            ]
        );

        auth()->user()->publish(
            new Todo(
                [
                    'title' => request('title'),
                    'done' => false
                ]
            )
        );

        return redirect('/todo');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return redirect('/todo');
    }

    public function update(Todo $todo)
    {
        $this->validate(
            request(), 
            [
                'done' => 'required'
            ]
        );
        
        $todo->update(request(['done']));

        return redirect('/todo');
    }
}
