<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileInformationController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterationController;

Route::get('/', HomeController::class);





Route::get('profile', [ProfileInformationController::class, '__invoke']);


Route::get('contact', [contactController::class, 'create']);

Route::post('contact', [contactController::class, 'store']);


Route::get('about', [AboutController::class, '__invoke']);


Route::get('users', [UserController::class, 'index']);

Route::get('users/{user:username}', [UserController::class, 'show'])->name('users.show');


Route::middleware('auth')->group(function(){

    Route::resource('tasks', TaskController::class);
    Route::post('logout', LogoutController::class)->name('logout');

});


Route::middleware('guest')->group(function(){

    Route::get('register', [RegisterationController::class, 'create'])->name('register');

    Route::post('register', [RegisterationController::class, 'store']);
    
    
    Route::get('login', [LoginController::class, 'create'])->name('login');
    
    Route::post('login', [LoginController::class, 'store'])->name('login');



});

