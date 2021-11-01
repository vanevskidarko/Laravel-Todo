<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::get();
        return view('index', [
            'todos' => $todos
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required'
        ]);
        
        $todo = new Todo;
        $todo->title=$request->title;
        $todo->save();
        return back();
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();

        return back();
    }
}
