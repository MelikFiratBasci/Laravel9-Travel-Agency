<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('select * from categories');
//        print_r($datalist);
//        exit();
        return view('admin._category', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *Insert data
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('categories')->insert([
            'title' =>$request->input('title'),
            'parent_id' =>$request->input('parent_id'),
            'keywords' =>$request->input('keywords'),
            'description' =>$request->input('description'),
            'slug' =>$request->input('slug'),
            'status' =>$request->input('status')
        ]);
        return redirect()->route('admin_category');
    }

    public function add()
    {
        $datalist = DB::table('categories')->get()->where('parent_id', 0);


        return view('admin._category_add', ['datalist' => $datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    //delete
    public function destroy(Category $category,$id)
    {
        DB::table('categories')->where('id','=',$id)->delete();
        return redirect()->route('admin_category');
    }
}
