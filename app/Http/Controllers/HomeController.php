<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    //
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
