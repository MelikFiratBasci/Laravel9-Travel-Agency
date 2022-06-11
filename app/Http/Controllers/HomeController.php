<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Package;
use App\Models\Comment;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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
        $slider = Package::select('id', 'title', 'image', 'price', 'slug')->limit(4)->get();
        $daily = Package::select('id', 'title', 'image', 'price', 'slug')->limit(6)->inRandomOrder()->get();
        $last = Package::select('id', 'title', 'image', 'price', 'slug')->limit(6)->orderByDesc('id')->get();


        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'last' => $last,
            'page' => 'home'
        ];
        return view('home.index', $data);
    }

    public function getpackage(Request $request)
    {
        $search = $request->input('search');
        $count = Package::where('title', 'like', '%' . $search . '%')->get()->count();
        if ($count == 1) {
            $data = Package::where('title', $request->input('search'))->first();
            return redirect()->route('package', ['id' => $data->id, 'slug' => $data->slug]);
        } else {
            return redirect()->route('packagelist', ['search' => $search]);
        }
    }

    public function packagelist($search)
    {
        $datalist = Package::where('title', 'like', '%' . $search . '%')->get();
        return view('home.search_packages', ['search' => $search, 'datalist' => $datalist]);

    }

    public function storecomment(Request $request)
    {
        #dd($request);

        $data = new Comment();
        $data->user_id = Auth::id();
        $data->package_id = $request->input('package_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->IP = request()->ip();
        $data->save();
        return redirect()->route('package', ['id' => $request->input('package_id'), 'slug' => $request->input('slug')])->with('success','your comment has been sent');
    }

    public function package($id, $slug)
    {
        $data = Package::find($id);
        $datalist = Image::where('package_id', $id)->get();
        $reviews=Comment::where('package_id',$id)->get();
        $avg=$reviews->avg('rate');
        return view('home._package_detail', ['data' => $data, 'datalist' => $datalist,'reviews'=>$reviews,'avg'=>$avg]);

    }

    public function addtocart($id)
    {
        $data = Package::find($id);

    }

    public function categorypackages($id, $slug)
    {
        $datalist = Package::where('category_id', $id)->get();
        $data = Package::find($id);
        return view('home._category_packages', ['data' => $data, 'datalist' => $datalist]);


    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home._about', ['setting' => $setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home._references', ['setting' => $setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');

        return view('home._faq', ['datalist' => $datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home._contact', ['setting' => $setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');;
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();

        $data->save();
        return redirect()->route('contact');
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
        return view('home._blank', ['setting' => $setting]);
    }

    public function param($id, $number)
    {
        echo "Parameter 1:", $id;
        echo "<br>Parameter2:", $number;
    }
}
