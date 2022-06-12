<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id', Auth::id())->wherenot('status', 'False')->get();
        return view('admin._order', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Reservation::where('user_id', Auth::id())->where('status', 'False')->get();
        #dd($request);
        foreach ($datalist as $rs) {
            $rs->status = 'Pndng';
            $rs->save();
        }
        return redirect()->back()->with('success', 'reservation updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data = Reservation::where('package_id', $id)->where('user_id', Auth::id())->first();
        #
        if ($data && $data->start_date == $request->input('start_date') && $data->end_date == $request->input('end_date')) {
            $data->person = $data->person + $request->input('person');
            dd($request);
        } else {
            $data = new Reservation();
            #dd($request);
            $data->package_id = $id;
            $data->user_id = Auth::id();
            $data->person = $request->input('person');
            $data->start_date = $request->input('start_date');
            $data->end_date = $request->input('end_date');

        }

        $data->save();
        return redirect()->back()->with('success', 'Eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data=Reservation::find($id);

        ;
        return view('admin._order_edit',['data'=>$data]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation, $id)
    {
        $data = Reservation::where('id', $id)->first();
        #dd($request);
        $data->status = $request->input('status');
        $data->note = $request->input('note');
        $data->save();
        return redirect()->back()->with('success', 'reservation updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Reservation $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation, $id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'package reservation deleted');
    }
}
