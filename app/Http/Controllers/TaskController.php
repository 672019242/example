<?php

namespace App\Http\Controllers;

use App\Models\Task;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    
    {

       $tasks = Task::orderBy('id', 'desc')->get();

       return view('tasks.index', ['tasks' => $tasks]);

    }

    public function store(Request $request){

        Task::create(['nama' => $request->nama,
    
            'mark'=>false,
    
    
    ]);



        return back();

    }

    public function edit($id){

        // $tasks = Task::where('id',$id)->first();

        $tasks = Task::find($id);

        return view('tasks.edit', ['tasks' => $tasks]);


    }

    public function update(Request $request, $id){

        Task::find($id)->update(['nama' => $request->nama]);

        return redirect('tasks');

    }

    public function destroy($id){

        Task::find($id)->delete();

        return back();

    }
}
