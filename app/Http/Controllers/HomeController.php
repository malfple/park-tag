<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    public function showIndex(){
        if(!Auth::check())return redirect('/login');
        return view('index');
    }
}
