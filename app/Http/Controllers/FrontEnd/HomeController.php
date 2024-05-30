<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {

        $propertyData = $request->all();
        $personalInfoRecord = PersonalInfo::create([
            "property_record_id" => mt_rand(100000, 999999),
            "pInfo_fName" => $request->firstName,
            "pInfo_lName" => $request->lastName,
            "pInfo_email" => $request->email,
            "pInfo_phoneNumber" => $request->phone

        ]);
        // 'property_record_id',
        // 'purpose_purpose',
        // 'pupose_home',
        // 'purpose_plot',
        // 'purpose_commercial',
        // 'address_city',
        // 'address_area',
        // 'address_phase',
        // 'address_sector',
        // 'address_address',
        // 'propertyDetail_plot_num',
        // 'propertyDetail_area',
        // 'propertyDetail_area_unit',
        // 'propertyDetail_bedrooms',
        // 'propertyDetail_bathrooms',
        // 'extra_info_title',
        // 'extra_info_postingas',
        // 'extra_info_mobile',
        // 'extra_info_landline',
        // 'extra_info_description'

        $propertyListingPaPe = PropertyListingPaPe::create([
            "property_record_id" => $personalInfoRecord->property_record_id,
            "purpose_purpose" => $request->purpose,
            "pupose_home" => $request->propertyType,
            "purpose_plot" => $request->propertyType,
            "purpose_commercial" => $request->propertyType,
            "address_city" => $request->city,
            "address_area" => $request->size,
            "price" => $request->totalPrice,

            // "address_street" => $request->address_street,
            // "address_landmark" => $request->address_landmark,
            // "address_pincode" => $request->address_pincode,
            // "address_latitude" => $request->address_latitude,
            // "address_longitude" => $request->address_longitude,
            // "address_map" => $request->address_map,
        ]);
        return json_encode($personalInfoRecord);
    }
}
