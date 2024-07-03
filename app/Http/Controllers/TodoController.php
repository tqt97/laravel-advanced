<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('todos.index');
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $data = [];
        // $todo = auth()->user()->todos()->create($request->only('title'));
        $data['title'] = $request->title;
        $data['user_id'] = auth()->id() ?? 1;

        $todo = Todo::create($data);

        return redirect()->route('todos.index');
    }
}
