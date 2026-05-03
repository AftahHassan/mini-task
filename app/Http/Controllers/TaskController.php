<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller

{
    //Afficher formulaire + tâches
    public function index()
    {
        $tasks = Task::all();
        //return view('abc', ['tasks' => $table_task]);
        return view('tasks', compact('tasks'));
    }

    // Ajouter tâche
    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title
        ]);

        return redirect('/');
    }


    public function destroy(Task $task)
    {
            $task->delete();

            return redirect('/');
    }
}
