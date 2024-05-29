<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyRecordFiles extends Model
{
    protected $table = 'property_record_files';
    protected $fillable = [
        'property_record_id',
        'image_uri'
    ];

    public function personalInfo()
    {
        return $this->belongsTo(PersonalInfo::class, 'property_record_id', 'property_record_id');
    }
    use HasFactory;
}
