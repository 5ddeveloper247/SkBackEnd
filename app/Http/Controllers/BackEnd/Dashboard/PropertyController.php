<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;
use App\Models\Amenities;
use App\Models\City;
use App\Models\Area;
use App\Models\Location;
use App\Models\Sector;
use App\Models\PropertyRecordFiles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    //

    public function propertyListing(Request $request)
    {
        // resources\views\Backend\admin\property\propertyListiing.blade.php
        $personalInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('status', 0)->get();
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
        $cityData = City::with('areas.locations.sectors')->get();
        if ($cityData) {
            $cities = $cityData;
        } else {
            $cities = [];
        }

        return response()->json(['responseData' => $responseData, 'cityData' => $cities]);
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
                'price' => $request->price,
                'status' => '1',
                
            ]);

            // dd($personalInfoRecord);
            // Saving property listing page records
            $propertyListingPageRecord = PropertyListingPaPe::create([
                "property_record_id" => $personalInfoRecord->property_record_id,
                "purpose_purpose" => $request->purpose_purpose,
                "pupose_home" => $request->pupose_home,
                "purpose_plot" => $request->purpose_plot,
                "purpose_commercial" => $request->purpose_commercial,
                "address_city" => $request->address_city,
                "address_area" => $request->address_area,
                "address_phase" => $request->address_phase,
                "address_location" => $request->address_location,
                "address_map_location" => $request->address_map_location,
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



    public function propertyEditShow($id)
    {
        return view('Backend.admin.property.propertyEdit', ['id' => $id]);
    }





    public function propertyMainSubmission_edit(Request $request)
    {
        // Validation rules
        // Validation rules

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'pInfo_firstName_edit' => 'required|string|max:255',
            'pInfo_lastName_edit' => 'required|string|max:255',
            'pInfo_email_edit' => 'required|email|unique:personal_info,pInfo_email,' . $request->property_id_edit,
            'pInfo_phoneNumber_edit' => 'required|string|max:15',
            'purpose_purpose_edit' => 'required|string|max:255',
            'pupose_home_edit' => 'required|string|max:255',
            'purpose_plot_edit' => 'required|string|max:255',
            'purpose_commercial_edit' => 'required|string|max:255',
            'price_edit'=>'required|integer',
            'address_city_edit' => 'required|string|max:255',
            'address_area_edit' => 'required|string|max:255',
            'address_location_edit' => 'required|string|max:2000',
            'address_map_location_edit' => 'required|string|max:2000',
            'address_sector_edit' => 'required|string|max:255',
            'address_address_edit' => 'required|string|max:255',
            'propertyDetail_plot_num_edit' => 'required|string|max:255',
            'propertyDetail_area_edit' => 'required|string|max:255',
            'propertyDetail_area_unit_edit' => 'required|string|max:255',
            'propertyDetail_bedrooms_edit' => 'required|string|max:255',
            'propertyDetail_bathrooms_edit' => 'required|string|max:255',
            'extra_info_title_edit' => 'required|string|max:255',
            'extra_info_postingas_edit' => 'required|string|max:255',
            'extra_info_mobile_edit' => 'required|string|max:15',
            'extra_info_landline_edit' => 'required|string|max:15',
            'extra_info_description_edit' => 'required|string|max:5000',
            'photos_edit.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048' // validate each file
        ]);

        // Check validation results
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Validation failed. Please check your input.');
        }

        try {
            $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')
                ->where('id', $request->property_id_edit)
                ->first();

            if (!$propertyInfo) {
                return redirect()->back()->with('error', "Property not found");
            }

            // Update personal info
            $propertyInfo->pInfo_fName = $request->pInfo_firstName_edit;
            $propertyInfo->pInfo_lName = $request->pInfo_lastName_edit;
            $propertyInfo->pInfo_email = $request->pInfo_email_edit;
            $propertyInfo->pInfo_phoneNumber = $request->pInfo_phoneNumber_edit;
            $propertyInfo->price =$request->price_edit;
            $propertyInfo->status = '1';

            // Update property listing info
            if ($propertyInfo->propertyListingPape) {
                $propertyInfo->propertyListingPape->purpose_purpose = $request->purpose_purpose_edit;
                $propertyInfo->propertyListingPape->pupose_home = $request->pupose_home_edit;
                $propertyInfo->propertyListingPape->purpose_plot = $request->purpose_plot_edit;
                $propertyInfo->propertyListingPape->purpose_commercial = $request->purpose_commercial_edit;
                $propertyInfo->propertyListingPape->address_city = $request->address_city_edit;
                $propertyInfo->propertyListingPape->address_area = $request->address_area_edit;
                $propertyInfo->propertyListingPape->address_phase = $request->address_phase_edit;
                $propertyInfo->propertyListingPape->address_location = $request->address_location_edit;
                $propertyInfo->propertyListingPape->address_map_location = $request->address_map_location_edit;
                $propertyInfo->propertyListingPape->address_sector = $request->address_sector_edit;
                $propertyInfo->propertyListingPape->address_address = $request->address_address_edit;
                $propertyInfo->propertyListingPape->propertyDetail_plot_num = $request->propertyDetail_plot_num_edit;
                $propertyInfo->propertyListingPape->propertyDetail_area = $request->propertyDetail_area_edit;
                $propertyInfo->propertyListingPape->propertyDetail_area_unit = $request->propertyDetail_area_unit_edit;
                $propertyInfo->propertyListingPape->propertyDetail_bedrooms = $request->propertyDetail_bedrooms_edit;
                $propertyInfo->propertyListingPape->propertyDetail_bathrooms = $request->propertyDetail_bathrooms_edit;
                $propertyInfo->propertyListingPape->extra_info_title = $request->extra_info_title_edit;
                $propertyInfo->propertyListingPape->extra_info_postingas = $request->extra_info_postingas_edit;
                $propertyInfo->propertyListingPape->extra_info_mobile = $request->extra_info_mobile_edit;
                $propertyInfo->propertyListingPape->extra_info_landline = $request->extra_info_landline_edit;
                $propertyInfo->propertyListingPape->extra_info_description = $request->extra_info_description_edit;

                $propertyInfo->propertyListingPape->save();
            }

            // Update amenities
            $amenities = [
                'Possesion' => $request->has('check_Possesion_edit') ? 1 : 0,
                'Balloted' => $request->has('check_Balloted_edit') ? 1 : 0,
                'Electricity' => $request->has('check_Electricity_edit') ? 1 : 0,
                'WaterSupply' => $request->has('check_WaterSupply_edit') ? 1 : 0,
                'SuiGas' => $request->has('check_SuiGas_edit') ? 1 : 0,
                'StudyRoom' => $request->has('check_StudyRoom_edit') ? 1 : 0,
                'BoundryWall' => $request->has('check_BoundryWall_edit') ? 1 : 0,
                'NearbySchool' => $request->has('check_NearbySchool_edit') ? 1 : 0,
                'NearbyHospitals' => $request->has('check_NearbyHospitals_edit') ? 1 : 0,
                'NearbyShoppingMalls' => $request->has('check_NearbyShoppingMalls_edit') ? 1 : 0,
                'NearbyRestaurant' => $request->has('check_NearbyRestaurant_edit') ? 1 : 0,
                'NearbyPubicTransportService' => $request->has('check_NearbyPubicTransportService_edit') ? 1 : 0,
                'SecurityStaff' => $request->has('check_SecurityStaff_edit') ? 1 : 0,
                'CentralAirConditioning' => $request->has('check_CentralAirConditioning_edit') ? 1 : 0,
                'WasteDisposal' => $request->has('check_WasteDisposal_edit') ? 1 : 0,
                'DoubleGlazedWindows' => $request->has('check_DoubleGlazedWindows_edit') ? 1 : 0,
                'CentralHeating' => $request->has('check_CentralHeating_edit') ? 1 : 0,
                'LaundryRoom' => $request->has('check_LaundryRoom_edit') ? 1 : 0,
                'BroadbandInternetAccess' => $request->has('check_BroadbandInternetAccess_edit') ? 1 : 0,
                'PowerWindows' => $request->has('check_PowerWindows_edit') ? 1 : 0,
                'SatelliteorCableTVReady' => $request->has('check_SatelliteorCableTVReady_edit') ? 1 : 0,
            ];

            foreach ($amenities as $amenity => $value) {
                Amenities::updateOrCreate(
                    ['property_record_id' => $propertyInfo->property_record_id, 'amenities' => $amenity],
                    ['value' => $value]
                );
            }

            // Handle existing files
            $existingFiles = json_decode($request->existing_files ?? '[]');

            if ($propertyInfo->propertyRecordFiles) {
                foreach ($propertyInfo->propertyRecordFiles as $file) {
                    if (!in_array($file->image_uri, $existingFiles)) {
                        $file->delete();
                    }
                }
            }

            // Handle new files
            if ($request->hasFile('photos_edit')) {
                foreach ($request->file('photos_edit') as $photo) {
                    // Generate a unique file name
                    $fileName = uniqid('photo_') . '.' . $photo->getClientOriginalExtension();

                    // Move the uploaded file to a public directory
                    $path = $photo->move(public_path('uploads'), $fileName);

                    // Check if the file was moved successfully
                    if ($path) {
                        // Save file details to the database
                        PropertyRecordFiles::create([
                            'property_record_id' => $propertyInfo->property_record_id,
                            'image_uri' => 'uploads/' . $fileName
                        ]);
                    } else {
                        // Handle file upload failure
                        return redirect()->back()->with('error', "File upload failed for {$photo->getClientOriginalName()}");
                    }
                }
            }

            $propertyInfo->save();
            return redirect()->back()->with('success', "Edited Successfully");
        } catch (\Exception $e) {
            // Log the error message
            Log::error('Error in propertyMainSubmission_edit: ' . $e->getMessage());
            return redirect()->back()->with('error', "An unexpected error occurred. Please try.");
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

        $city_id = City::where('NAME', $propertyInfo->propertyListingPape->address_city)->value('id');
        $area_id = Area::where('NAME', $propertyInfo->propertyListingPape->address_area)->value('id');
        $location_id = Location::where('NAME', $propertyInfo->propertyListingPape->address_location)->value('id');
        $sector = $propertyInfo->propertyListingPape->address_sector;
        
        $areas = Area::where('CITY_ID', $city_id)->get();
        $locations = Location::where('AREA_ID', $area_id)->get();
        $sectors = Sector::where('LOCATION_ID', $location_id)->get();

        // dd($propertyInfo);
        if ($propertyInfo) {
            return response()->json(['propertyInfo' => $propertyInfo,'areas' => $areas,'locations' => $locations,'sectors' => $sectors]);
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
