<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSetting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function faq()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }




    //login
    public function login()
    {
        return view('admin.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('message', 'Kullanıcı çıkış yaptı');
    }

    //login check
    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);

        } else {
            return view('admin.login');
        }


    }


    public function test()
    {
        $setting = Setting::first();
        return view('home._blank',['setting'=>$setting]);
    }

    public function param($id, $number)
    {
        echo "Parameter 1:", $id;
        echo "<br>Parameter2:", $number;
    }
}
