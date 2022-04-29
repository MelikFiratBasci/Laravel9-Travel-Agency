<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //login
    public function login(){
        return view('admin.login');
    }
    //login check
    public function logincheck(Request $request){
        if($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email'=>'the provided credentials do not match our records',
            ]);
        }
        else{
            return view('admin.login');
        }
    }


    public function  index(){
        echo "Index function";
    }
    public function test (){
        return view('home.test');
    }
    public function param ($id,$number){
        echo "Parameter 1:",$id;
        echo "<br>Parameter2:",$number;
    }
}
