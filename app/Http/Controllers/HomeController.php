<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use Carbon\Carbon;

class HomeController extends Controller
{
    public function __invoke() {


        return view('home');

    }
    
}
