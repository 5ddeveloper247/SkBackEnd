<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenities extends Model
{
    protected $table='amenities';

    protected $fillable=[
        "property_record_id",
        "amenities",
        "value"

    ];


    public function personalInfo()
    {
        return $this->belongsTo(PersonalInfo::class, 'property_record_id', 'property_record_id');
    }
    use HasFactory;
}
