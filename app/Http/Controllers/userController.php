<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function login(){
        return view('user.login');
    }
    
    
    public function auth(Request $request)
    {
        $request->validate([

        'email' => 'required|exists:users,email',
        'password' => 'required'
        ],[
        'email.exists'=>"This user doesn't exists"
        ]);


        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
             return redirect('/dashboard');
        }else{
            return redirect()->route('getLogin')->with('fail', "Fail To Login");
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
