<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    protected $table = 'personal_info';
    protected $fillable = [
        "property_record_id",
        "pInfo_firstName",
        "pInfo_lastName",
        "pInfo_email",
        "pInfo_phoneNumber",
    ];


    use HasFactory;
}
