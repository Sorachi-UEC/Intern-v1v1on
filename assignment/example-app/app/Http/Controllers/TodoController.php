<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::where('user_id', Auth::id())->get();
        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->user_id = auth() -> id();
        $todo->save();
        
        
        return redirect()->route('todos.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $todob = Todo::where('user_id', Auth::id())->findOrFail($id);
        return response()->json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::where('user_id', Auth::id())->findOrFail($id);

        $validated = $request->validate([
            'title' => 'sometimes|string|max255',
            'dexcription' => 'nullable|string',
        ]);

        $todo -> update($validated);

        return response()->json($todo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $todo = Todo::findOrFail($id);

        $todo->delete();

        return redirect()->route('todos.index');
    }
}
