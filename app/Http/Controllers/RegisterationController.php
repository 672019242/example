<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterationController extends Controller
{
    public function create(){

        return view('auth.register');
    }

    public function store(Request $request){

        $request->validate([
        'username' => ['required', 'unique:users', 'alpha_num', 'min:3', 'max:25'],
        'name' => ['required','string','min:3'],
        'email' => ['required', 'unique:users','email'],
        'password' => ['required','min:8']

        ]);







        // $user = User::where('email',$request->email) ->orWhere('username', $request->username) ->first();
        // if($user){
        //         dd('sdh ada');
        // }


        User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)

        ]);

        session()->flash('success', 'Your are now register');
        return redirect('/');
    }
}
