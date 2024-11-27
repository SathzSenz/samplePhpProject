<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $table = 'vehicles';

    protected $fillable = [
        'make',
        'model',
        'year',
        'license_plate',
    ];

    //function defining vehicle has many maintenances
    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
