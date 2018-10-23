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
        if($found == 1)return redirect('/index'); // login successful
        else return redirect('/login'); // login failed, because member not found
    }

    public function addNewUser(){
        $found = 0;
        $members = DB::table('members')->get();
        foreach($members as $member){
            if($member->email == $_POST['email'] && $member->password == $_POST['password']){
                $found = 1;
            }
        }
        if($found == 1)return redirect('/login'); // register fail, because user already exist
        else{
            DB::table('members')->insert([
                'first_name' => $_POST['fname'],
                'last_name' => $_POST['lname'],
                'email' => $_POST['email'],
                'password' => $_POST['password']
            ]);
            redirect('/index');
        }
    }
}
