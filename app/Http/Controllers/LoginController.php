<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm(){
    	return view('login');
    }

    public function verifyUser(){
    	return $_POST;
    }

    public function addNewUser(){
    	return $_POST;
    }
}
