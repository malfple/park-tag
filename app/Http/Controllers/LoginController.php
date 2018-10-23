<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showForm(){
        return view('login');
    }

    public function verifyUser(){
        $found = 0;
        $members = DB::table('members')->get();
        foreach($members as $member){
            if($member->email == $_POST['email'] && $member->password == $_POST['password']){
                $found = 1;
            }
        }
        if($found == 1)return redirect('/index');
        else return redirect('/login');
    }

    public function addNewUser(){
        return $_POST;
    }
}
