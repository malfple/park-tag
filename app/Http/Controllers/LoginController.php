<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function showForm(){
        if(Auth::check())return redirect('/index');
        return view('login');
    }

    public function verifyUser(Request $request){
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        if(!$user){
            dd("user doesn't exist");
        }else{
            Auth::login($user);
            return redirect('/index');
        }
    }

    public function addNewUser(Request $request){
        if(User::where('email', $request->email)->first()){
            dd("email already exist");
        }
        $user = new User;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = "Member";
        $user->save();
        return redirect('/login');
    }

    public function doLogout(){
        Auth::logout();
        return redirect('/login');
    }
}
