<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;


    public function area()
    {
        return $this->belongsTo(Area::class, 'AREA_ID');
    }

    public function sectors()
    {
        return $this->hasMany(Sector::class, 'LOCATION_ID');
    }
}
