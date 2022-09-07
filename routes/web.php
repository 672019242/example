<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TaskController;

// #Route::view('/', 'home');

// #Route::get('/', fn () => dd(asset('css/app.css')));

// Route::get('/', fn () => view('home'));
// Route::view('contact', 'contact');
// Route::view('about', 'about');
// #Route::view('profile', 'profile');
// Route::view('posts/first-post', 'posts.show');

// #$appName = "laravel 8";
// #Route::view('/', 'home', ['appName' => $appName]);

// Route::get('profile', function (Request $request) {

//     // compact('name') =  ['name' => $name]

//     $name = $request->name;

//     return view('profile', ['name'=> $name]);
// });


Route::get('/', HomeController::class);

//Route::get('profile/{identifier}', [ProfileInformationController::class, '__invoke']);
Route::get('profile', [ProfileInformationController::class, '__invoke']);

Route::get('tasks', [TaskController::class, 'index']);

Route::post('tasks', [TaskController::class, 'store']);

Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);

Route::put('tasks/{id}', [TaskController::class, 'update']);

Route::delete('tasks/{id}', [TaskController::class, 'destroy']);

Route::get('contact', [contactController::class, 'create']);

Route::post('contact', [contactController::class, 'store']);



Route::get('about', [AboutController::class, '__invoke']);