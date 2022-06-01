<?php

namespace App\Http\Controllers;

use App\Load;
use Illuminate\Http\Request;

class LoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Load::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'pickup_date' => 'required',
            'dropoff_date' => 'required',
            'dropoff_location' => 'required',
            'pickup_location' => 'required',
            'phone_number' => 'required',
            'truck_type' => 'required',
            'commodity' => 'required',
            'freezer' => '',
            'email' => '',
        ]);
        return Load::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function show(Load $load)
    {
        //
        return Load::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function edit(Load $load)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Load $load)
    {
        //
        $load = Load::find($id);
        $load->update($request->all());
        return $load;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Load  $load
     * @return \Illuminate\Http\Response
     */
    public function destroy(Load $load)
    {
        //
        return Load::destroy($id);
    }
    public function search($load)
    {
        //
       return Load::where('pickup_date', 'like', '%'.$load.'%')->orWhere('dropoff_date', 'like', '%'.$load.'%')->orWhere('dropoff_location', 'like', '%'.$load.'%')->orWhere('pickup_location', 'like', '%'.$load.'%')->orWhere('truck_type', 'like', '%'.$load.'%')->orWhere('freezer', 'like', '%'.$load.'%')->get();
    }
}
