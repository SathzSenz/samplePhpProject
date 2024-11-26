<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vehicle', \App\Http\Controllers\VehicleController::class);

Route::resource('vehicle.maintenance', \App\Http\Controllers\MaintenanceController::class);
