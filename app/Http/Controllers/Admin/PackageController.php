<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Package::all();
        return view('admin._package',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Category::all();
        return  view('admin._package_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Package;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        //$data->image = $request->input('image');
        $data->category_id = $request->input('category_id');;
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->user_id = Auth::id();
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package,$id)
    {
        $data= Package::find($id);
        $datalist=Category::all();
        return view('admin._package_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package,$id)
    {
        $data = Package::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        //$data->image = $request->input('image');
        $data->category_id = $request->input('category_id');;
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->user_id = Auth::id();
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_packages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package,$id)
    {
        $data =Package::find($id);
        $data->delete();
        return redirect()->route('admin_packages');
    }
}
