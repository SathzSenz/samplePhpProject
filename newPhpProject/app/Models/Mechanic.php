<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    protected $table = 'mechanics';

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
    ];

    //function defining mechanic has many maintenances
    public function maintenance()
    {
        return $this->hasMany(Maintenance::class);
    }
}
