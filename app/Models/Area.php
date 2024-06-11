<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;


    public function city()
    {
        return $this->belongsTo(City::class, 'CITY_ID');
    }

    public function locations()
    {
        return $this->hasMany(Location::class, 'AREA_ID');
    }
}
