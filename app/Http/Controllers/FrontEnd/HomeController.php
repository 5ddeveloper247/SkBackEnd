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

         //return json_encode($request->all());
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:15',
            'totalPrice' => 'required|numeric',
            'purpose' => 'required|string|max:255',
            'homeType' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'commercial' => 'required|string|max:255',
            'plot' => 'required|string|max:255',
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
                "pupose_home" => $request->homeType,
                "purpose_plot" => $request->plot,
                "purpose_commercial" => $request->commercial,
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



    public function propertyHomeViewbyMediaType(Request $request)
    {
        try {
            $propertyType = $request->input('mediaSliderType');
            $query = PersonalInfo::query();

            if (isset($propertyType) && $propertyType !== 'All') {
                $query->whereHas('propertyListingPape', function ($q) use ($propertyType) {
                    $q->where('purpose_purpose', 'LIKE', '%' . $propertyType . '%');
                });
            } else {
                // Fetch the latest 7 records
                $query->with(['propertyListingPape', 'amenities', 'propertyRecordFiles'])
                    ->orderBy('created_at', 'desc')
                    ->limit(7);
            }

            // Eager load relationships
            $query->with(['propertyListingPape', 'amenities', 'propertyRecordFiles']);

            // Execute the query and return the results  
            $propertyInfo = $query->get();

            if ($propertyInfo->isEmpty()) {
                return response()->json(['propertyInfo' => []]);
            }

            return response()->json(['propertyInfo' => $propertyInfo]);
        } catch (\Exception $e) {
            // Log the exception for debugging purposes
            Log::error('Error fetching property info: ' . $e->getMessage());

            // Return a JSON response with an error message
            return response()->json(['error' => 'Failed to fetch property data. Please try again later.'], 500);
        }
    }





    // public function mediaIndexgetByFilters(Request $request)
    // {

    //     $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->get();
    //     if ($propertyInfo) {
    //         return response()->json(['propertyInfo' => $request->all()]);
    //         // return response()->json(['propertyInfo' => $propertyInfo]);
    //     } else {
    //         return response()->json(['propertyInfo' => []]);
    //         // return response()->json(['propertyInfo' => []]);
    //     }
    // }



    public function mediaIndexgetByFilters(Request $request)
    {
        try {
            // Retrieve all filter data from the request
            $filterData = $request->all();

            // Start building the query
            $query = PersonalInfo::query();

            // Apply filters if they are provided
            $query->where(function ($query) use ($filterData) {
                // Filters on PropertyListingPape attributes
                if (isset($filterData['purpose'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('purpose_purpose', 'LIKE', '%' . $filterData['purpose'] . '%');
                    });
                }
                if (isset($filterData['area'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_area', $filterData['area']);
                    });
                }
                if (isset($filterData['city'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_city', $filterData['city']);
                    });
                }
                if (isset($filterData['commercial'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('purpose_commercial', $filterData['commercial']);
                    });
                }
                if (isset($filterData['homeType'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('pupose_home', $filterData['homeType']);
                    });
                }
                if (isset($filterData['plot'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('purpose_plot', $filterData['plot']);
                    });
                }
                if (isset($filterData['sector'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_sector', $filterData['sector']);
                    });
                }
                if (isset($filterData['minPrice']) && isset($filterData['maxPrice'])) {
                    $query->whereBetween('price', [$filterData['minPrice'], $filterData['maxPrice']]);
                }
                // Add more filter conditions for other attributes if needed
            });

            // Eager load relationships
            $query->with(['propertyListingPape', 'amenities', 'propertyRecordFiles']);

            // Execute the query and return the results  
            $propertyInfo = $query->get();

            return response()->json(['propertyInfo' => $propertyInfo]);
        } catch (\Exception $e) {
            Log::error('Error fetching property records: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch property data.',
            ], 500);
        }
    }






    public function getPropertyDetailbyId(Request $request)
    {
        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('id', $request->id)->first();
        if ($propertyInfo) {
            return response()->json(['propertyInfo' => $propertyInfo]);
        } else {
            return response()->json(['propertyInfo' => []]);
        }
    }
}
