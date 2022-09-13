<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    
    {
        
       $tasks = Task::orderBy('id', 'desc')->get();

       return view('tasks.index', [
        
        'task' => new Task,

        'submit' => 'Create',


        'tasks' => $tasks]);

    }

    public function store(TaskRequest $request){

        Task::create($request->all());
    
        return back();

    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            
            
            'tasks' => $task,
            'submit' => 'Update'
        ]);
    }

    public function update(TaskRequest $request, $id){

        Task::find($id)->update(['nama' => $request->nama]);

        return redirect('tasks');

    }

    public function destroy($id){

        Task::find($id)->delete();

        return back();

    }
}
