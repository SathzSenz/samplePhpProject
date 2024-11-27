<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $fillable = [
        'vehicle_id',
        'description',
        'date',
        'cost',
    ];

    //function defining this model belongs to vehicle model
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    //function defining this model belongs to mechanic model
    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }
}
