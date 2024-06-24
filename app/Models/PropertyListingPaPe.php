<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyListingPaPe extends Model
{
    protected $table = 'property_listing_pape';

    public function personalInfo()
    {
        return $this->hasOne(PersonalInfo::class, 'property_record_id', 'property_record_id');
    }
    protected $fillable = [

        'property_record_id',
        'purpose_purpose',
        'pupose_home',
        'purpose_plot',
        'purpose_commercial',
        'address_city',
        'address_area',
        'address_phase',
        'address_sector',
        'address_location',
        'address_map_location',
        'address_address',
        'propertyDetail_plot_num',
        'propertyDetail_area',
        'propertyDetail_area_unit',
        'propertyDetail_bedrooms',
        'propertyDetail_bathrooms',
        'extra_info_title',
        'extra_info_postingas',
        'extra_info_mobile',
        'extra_info_landline',
        'extra_info_description'
    ];

    use HasFactory;
}
