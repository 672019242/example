<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\RegistrationRequest;

class RegisterationController extends Controller
{

    public function create(){

        return view('auth.register');
    }

    public function store(RegistrationRequest $request){

        User::create($request->all());

        return redirect('/')->with('success', 'Your are now register');
    }
}
