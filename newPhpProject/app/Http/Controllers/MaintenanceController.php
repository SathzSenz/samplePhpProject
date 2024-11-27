<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use App\Models\Mechanic;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Vehicle $vehicle)
    {
        // Retrieve maintenance records for the specific vehicle
        $maintenances = $vehicle->maintenance;

        // Pass data to the view
        return view('maintenance.index', compact('vehicle', 'maintenances'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Vehicle $vehicle)
    {

        //retrieve all mechanics available
        $mechanics = Mechanic::all();

        return view('maintenance.create', compact('vehicle', 'mechanics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'date'=> 'required|date',
            'cost'=> 'required|numeric|min:0',
        ]);

        $vehicle->maintenance()->create($request->all());

        return redirect()->route('vehicle.maintenance.index', $vehicle)->with('success', 'Maintenance record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Maintenance $maintenance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle, Maintenance $maintenance)
    {
        return view('maintenance.edit', compact('vehicle','maintenance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle, Maintenance $maintenance)
    {
        $request->validate([
            'description' => 'required|string|max:255',
            'date'=> 'required|date',
            'cost'=> 'required|numeric|min:0',
        ]);

        $maintenance->update($request->all());

        return redirect()->route('vehicle.maintenance.index', $vehicle)->with('success', 'Maintenance record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle, Maintenance $maintenance)
    {
        $maintenance->delete();

        return redirect()->route('vehicle.maintenance.index', $vehicle)->with('success', 'Maintenance record deleted successfully');
    }
}
