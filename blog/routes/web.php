<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

// OR 
// Route::view('/home', 'home');

//if we want to pass some parameter
Route::get('/about/{name}', function($name){
    return view('about',['name'=>$name]);
});

//How to access controller in web page
Route::get('user',[UserController::class,'getUser']);
//multiple functions from same controller
Route::get('users',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'nameUser']);

Route::get('admin-login',[UserController::class,'adminLogin']);