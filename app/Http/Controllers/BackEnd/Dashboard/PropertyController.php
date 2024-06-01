<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;
use App\Models\Amenities;
use App\Models\PropertyRecordFiles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PropertyController extends Controller
{
    //

    public function propertyListing(Request $request)
    {
        // resources\views\Backend\admin\property\propertyListiing.blade.php
        $personalInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->get();
        if ($personalInfo == null) {
            return view('Backend.admin.property.propertyListiing');
        } else {
            return view('Backend.admin.property.propertyListiing', compact('personalInfo'));
        }
    }


    // load property for ajax
    public function loadpropertyList(Request $request)
    {
        $responseData = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->get();
        return response()->json(['responseData' => $responseData]);
    }


    public function propertyMainSubmission(Request $request)
    {

        // Validate the incoming request


        // Initialize an empty array to store file paths

        DB::beginTransaction();

        try {
            // Saving personal info
            $personalInfoRecord = PersonalInfo::create([
                "property_record_id" => mt_rand(100000, 999999),
                "pInfo_fName" => $request->pInfo_firstName,
                "pInfo_lName" => $request->pInfo_lastName,
                "pInfo_email" => $request->pInfo_email,
                "pInfo_phoneNumber" => $request->pInfo_phoneNumber,
            ]);

            // dd($personalInfoRecord);
            // Saving property listing page record
            $propertyListingPageRecord = PropertyListingPape::create([
                "property_record_id" => $personalInfoRecord->property_record_id,
                "purpose_purpose" => $request->purpose_purpose,
                "pupose_home" => $request->pupose_home,
                "purpose_plot" => $request->purpose_plot,
                "purpose_commercial" => $request->purpose_commercial,
                "address_city" => $request->address_city,
                "address_area" => $request->address_area,
                "address_phase" => $request->address_phase,
                "address_sector" => $request->address_sector,
                "address_address" => $request->address_address,
                "propertyDetail_plot_num" => $request->propertyDetail_plot_num,
                "propertyDetail_area" => $request->propertyDetail_area,
                "propertyDetail_area_unit" => $request->propertyDetail_area_unit,
                "propertyDetail_bedrooms" => $request->propertyDetail_bedrooms,
                "propertyDetail_bathrooms" => $request->propertyDetail_bathrooms,
                "extra_info_title" => $request->extra_info_title,
                "extra_info_postingas" => $request->extra_info_postingas,
                "extra_info_mobile" => $request->extra_info_mobile,
                "extra_info_landline" => $request->extra_info_landline,
                "extra_info_description" => $request->extra_info_description,
            ]);

            //Saving amenities
            $amenities = [
                'Possesion',
                'Balloted',
                'Sewerage',
                'Electricity',
                'WaterSupply',
                'SuiGas',
                'BoundryWall',
                'NearbySchool',
                'NearbyHospitals',
                'NearbyShoppingMalls',
                'NearbyRestaurant',
                'NearbyPubicTransportService',
                'SecurityStaff',
                'CentralAirConditioning',
                'WasteDisposal',
                'DoubleGlazedWindows',
                'CentralHeating',
                'StudyRoom',
                'LaundryRoom',
                'BroadbandInternetAccess',
                'PowerWindows',
                'SatelliteorCableTVReady',
            ];

            // Loop over the amenities and save them
            foreach ($amenities as $amenity) {
                $amenityKey = 'check_' . $amenity;
                $value = $request->has($amenityKey) ? 1 : 0;

                // Save to the database
                Amenities::create([
                    'property_record_id' => $personalInfoRecord->property_record_id,
                    'amenities' => $amenity,
                    'value' => $value
                ]);
            }

            // Store the uploaded files
            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $photo) {
                    // Generate a unique file name
                    $fileName = uniqid('photo_') . '.' . $photo->getClientOriginalExtension();

                    // Move the uploaded file to a public directory
                    $path = $photo->move(public_path('uploads'), $fileName);

                    // Check if the file was moved successfully
                    if ($path) {
                        // Save file details to the database
                        $file = PropertyRecordFiles::create([
                            'property_record_id' => $personalInfoRecord->property_record_id,
                            'image_uri' => 'uploads/' . $fileName
                        ]);
                    } else {
                        // Handle file upload failure
                    }
                }
            }


            // Commit the transaction
            DB::commit();

            return redirect()->back()->with('success', 'Record has been saved successfully.');
        } catch (\Exception $e) {
            // Rollback the transaction
            DB::rollBack();
            // Log the error (optional)
            Log::error('Error saving property submission: ' . $e->getMessage());

            return redirect()->back()->with('error', 'There was an error saving the record. Please try again.');
        }
    }




    public function changePropertyStatus(Request $request)
    {

        $property = PersonalInfo::where('id', $request->id)->first();

        if ($property) {
            if ($property->status == 1) {


                $property->status = '0';
                $property->save();
            } else {
                $property->status = '1';
                $property->save();
            }
            return response()->json(['message' => 'Property status changed successfully.', 'status' => 200]);
        } else {
            return response()->json(['message' => 'Property not found.', 'status' => 402]);
        }
    }

    public function changePendingPropertyStatus(Request $request)
    {
        $property = PersonalInfo::where('id', $request->id)->first();
        if ($property) {
            if ($property->hold == 1) {
                $property->hold = '0';
                $property->save();
            } else {
                $property->hold = '1';
                $property->save();
            }
            return response()->json(['message' => 'Property Hold status changed successfully.', 'status' => 200]);
        } else {
            return response()->json(['message' => 'Property  not found.', 'status' => 402]);
        }
    }


    public function getPropertyData(Request $request)
    {
        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('id', $request->id)->first();
        if ($propertyInfo) {
            return response()->json(['propertyInfo' => $propertyInfo]);
        } else {
            return response()->json(['propertyInfo' => []]);
        }
    }




    public function editPropertyData(Request $request)
    {

        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('id', $request->property_id_edit)->first();
        if ($propertyInfo) {
            $propertyInfo->pInfo_fName = $request->property_name_edit;
            $propertyInfo->pInfo_lName = $request->last_name_edit;
            $propertyInfo->pInfo_email = $request->email_edit;
            $propertyInfo->pInfo_phoneNumber = $request->contact_number_edit;
            $propertyInfo->save();
            return response()->json(['propertyInfo' => $propertyInfo, 'message' => "Property Detail Updated Successfully", 'status' => 200]);
        } else {
            return response()->json(['propertyInfo' => [], 'message' => "Property Detail Not Updated", 'status' => 402]);
        }
    }


    public function deletePropertyData(Request $request)
    {
        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('id', $request->del_id)->first();

        if ($propertyInfo) {
            $propertyInfo->delete();
            return response()->json(['propertyInfo' => $propertyInfo, 'message' => "Property Detail Deleted Successfully", 'status' => 200]);
        } else {
            return response()->json(['propertyInfo' => [], 'message' => "Property Detail Not Deleted", 'status' => 402]);
        }
    }
}
