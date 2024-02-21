<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tasks.index', ['tasks' => task::all()]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        task::create($request->all());
        return redirect()
            ->route('tasks.index')
            ->with('succes', 'Mehanicul a fost adaugat cu succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);
        $task->name = $request-> name;

        $task->save();
        return redirect() -> route('tasks.index'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect() ->back();
    }
}
