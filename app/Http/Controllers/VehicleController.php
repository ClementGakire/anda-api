<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Vehicle::all();
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
            'category' => 'required',
            'plateNo' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'image' => 'required',
            'client_id' => 'required'
        ]);
        return Vehicle::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Vehicle::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vehicle = Vehicle::find($id);
        $vehicle->update($request->all());
        return $vehicle;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       return Vehicle::destroy($id);
    }
    /**
     * Search for a vehicle
     *
     * @param  str  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function search($vehicle)
    {
        //
       return Vehicle::where('category', 'like', '%'.$vehicle.'%')->orWhere('plateNo', 'like', '%'.$vehicle.'%')->orWhere('height', 'like', '%'.$vehicle.'%')->orWhere('weight', 'like', '%'.$vehicle.'%')->get();
    }
}
