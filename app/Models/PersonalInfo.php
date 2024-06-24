<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = 'personal_info';

    public function propertyListingPape()
    {
        return $this->belongsTo(PropertyListingPaPe::class, 'property_record_id', 'property_record_id');
    }

    public function amenities()
    {
        return $this->hasMany(Amenities::class, 'property_record_id', 'property_record_id');
    }

    public function propertyRecordFiles()
    {
        return $this->hasMany(PropertyRecordFiles::class, 'property_record_id', 'property_record_id');
    }
    protected $fillable = [
        "property_record_id",
        "pInfo_fName",
        "pInfo_lName",
        "pInfo_email",
        "pInfo_phoneNumber",
        "price",
        "currency",
        'status',
    ];


    use HasFactory;
}
