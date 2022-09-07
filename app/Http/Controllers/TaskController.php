<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    
    {

       $tasks = DB::table('tasks')->orderBy('id', 'desc')->get();

       return view('tasks.index', ['tasks' => $tasks]);

    }

    public function store(Request $request){

        DB::table('tasks')->insert([

            'nama' => $request->nama

        ]);

        return back();

    }

    public function edit($id){

        $tasks = DB::table('tasks')->where('id',$id)->first();

        return view('tasks.edit', ['tasks' => $tasks]);


    }

    // public function update(Request $request, $id){
    //     $tasks = DB::table('tasks')->where('id',$id)->update('nama' => $request->nama);

    // }
}
