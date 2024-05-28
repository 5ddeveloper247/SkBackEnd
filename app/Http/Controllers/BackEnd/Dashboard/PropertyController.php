<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;
use App\Models\Amenities;
use App\Models\PropertyRecordFiles;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    //

    public function propertyListing(Request $request)
    {
        // resources\views\Backend\admin\property\propertyListiing.blade.php
        return view('Backend.admin.property.propertyListiing');
    }


    public function propertyMainSubmission(Request $request)
    {

        $personalInfoRecord = PersonalInfo::create([
            "property_record_id" => random_int(0, 9),
            "pInfo_fName" => $request->pInfo_firstName,
            "pInfo_lName" => $request->pInfo_lastName,
            "pInfo_email" => $request->pInfo_email,
            "pInfo_phoneNumber" => $request->pInfo_phoneNumber,
        ]);
        dd($personalInfoRecord);
    }
}
