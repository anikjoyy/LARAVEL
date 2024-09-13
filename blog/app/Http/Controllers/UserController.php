<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//checking if view is exist or not
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Anik Das";
        return view('user');
    }

    function aboutUser(){
        return "I am a Learner";
    }

    function nameUser($name){
        return "My name is " . $name;
    }

    function adminLogin(){
        //checking
        // if(View::exists('admin.signup')){
        //     return view('admin.signup');
        // }else{
        //     echo "No View Found!";
        // }    
        
        if(View::exists('admin.login')){
            return view('admin.login');
        }else{
            echo "No View Found!";
        }     
    }
}
