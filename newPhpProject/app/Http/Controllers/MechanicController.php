<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Http\Request;

class MechanicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //retrieving all mechanics
        $mechanics = Mechanic::all();
        return view('mechanics.index', compact('mechanics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mechanics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate input data
        $request->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'email' => 'required',
        ]);

        //create mechanic record
        Mechanic::create($request->all());

        return redirect()->route('mechanics.index')->with('success', 'Mechanic created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mechanic $mechanic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mechanic $mechanic)
    {
        return view('mechanics.edit', compact('mechanic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mechanic $mechanic)
    {
        //validates data
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'address' => 'required|string',
            'email' => 'required\string',
        ]);

        //updates mechanic record
        $mechanic->update($request->all());

        return redirect()->route('mechanics.index')->with('success', 'Mechanic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanic $mechanic)
    {
        $mechanic->delete();

        return redirect()->route('mechanics.index')->with('success', 'Mechanic deleted successfully.');
    }
}
