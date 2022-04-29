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
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            {
                // echo "Login ok ";
                return redirect('/admin');
            } else {
                //echo "Error login ";
                return redirect('/admin/login')->with('message','Hatalı Email yada Şifre');
            }
        }

        else{
            return view('admin.login');
        }


    }



    public function test (){
        return view('home.test');
    }
    public function param ($id,$number){
        echo "Parameter 1:",$id;
        echo "<br>Parameter2:",$number;
    }
}
