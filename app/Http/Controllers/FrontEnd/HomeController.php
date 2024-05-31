<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:15',
            'totalPrice' => 'required|numeric',
            'purpose' => 'required|string|max:255',
            'propertyType' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'size' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Create PersonalInfo record
            $personalInfoRecord = PersonalInfo::create([
                "property_record_id" => mt_rand(100000, 999999),
                "pInfo_fName" => $request->firstName,
                "pInfo_lName" => $request->lastName,
                "pInfo_email" => $request->email,
                "pInfo_phoneNumber" => $request->phone,
                "status" => '0',
                'hold' => '2',
                'price' => $request->totalPrice,
            ]);
            if ($personalInfoRecord) {
                $Property_record_id = $personalInfoRecord->property_record_id;
            } else {
                $Property_record_id = null;
            }

            // Create PropertyListingPaPe record
            $propertyListingPaPe = PropertyListingPaPe::create([
                "property_record_id" => $Property_record_id,
                "purpose_purpose" => $request->purpose,
                "pupose_home" => $request->propertyType,
                "purpose_plot" => $request->propertyType,
                "purpose_commercial" => $request->propertyType,
                "address_city" => $request->city,
                "address_area" => $request->size,
            ]);

            // Send email
            // $body = view('mail.mail_templates.common')->render();
            // $userEmailsSend[] = 'devofd172@gmail.com';
            // $userEmailsSend[] = $request->email;
            // // to username, to email, from username, subject, body html 
            // $response = sendMail('devofd172@gmail.com', $userEmailsSend, 'Sk Property', 'Thanks For submitting property detail', $body);

            // Return success response
            return response()->json([
                'success' => true,
                'personalInfoRecord' => $personalInfoRecord
            ], 201);
        } catch (\Exception $e) {
            // Log the error
            Log::error('Error creating property records: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function propertyHomeView(Request $request)
    {

        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->get();
        if ($propertyInfo) {
            return response()->json(['propertyInfo' => $propertyInfo]);
        } else {
            return response()->json(['propertyInfo' => []]);
        }
    }

    public function getPropertyDetailbyId(Request $request){
        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('id', $request->id)->first();
        if ($propertyInfo) {
            return response()->json(['propertyInfo' => $propertyInfo]);
        } else {
            return response()->json(['propertyInfo' => []]);
        }
    }
}
