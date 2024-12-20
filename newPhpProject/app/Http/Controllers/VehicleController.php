<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicle::paginate(10);
        return view('vehicle.index', [
            'vehicles' => $vehicles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate data
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'license_plate' => 'required',
        ]);

        //create vehicle record
        Vehicle::create($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Vehicle added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicle.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        //validate input data
        $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required|integer',
            'license_plate' => 'required',
        ]);

        //update vehicle record
        $vehicle->update($request->all());
        return redirect()->route('vehicle.index')->with('success', 'Vehicle updated successfully.');
    }

    public function destroy(Vehicle $vehicle)
    {
        //delete vehicle record
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('success', 'Vehicle deleted successfully.');
    }
}
