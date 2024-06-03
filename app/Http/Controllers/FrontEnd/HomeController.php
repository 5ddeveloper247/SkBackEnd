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
                // Filters on PersonalInfo attributes
                // Filters on PropertyListingPape attributes
                if (isset($filterData['purpose'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('purpose_purpose', 'LIKE', '%' . $filterData['purpose'] . '%');
                    });
                }

                if (isset($filterData['area'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('address_area', 'LIKE', '%' . $filterData['area'] . '%');
                    });
                }
                if (isset($filterData['city'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('address_city', 'LIKE', '%' . $filterData['city'] . '%');
                    });
                }
                if (isset($filterData['commercial'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('purpose_commercial', 'LIKE', '%' . $filterData['commercial'] . '%');
                    });
                }
                if (isset($filterData['homeType'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('pupose_home', 'LIKE', '%' . $filterData['homeType'] . '%');
                    });
                }
                if (isset($filterData['plot'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('purpose_plot', 'LIKE', '%' . $filterData['plot'] . '%');
                    });
                }
                if (isset($filterData['sector'])) {
                    $query->orWhereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->where('address_sector', 'LIKE', '%' . $filterData['sector'] . '%');
                    });
                }
                
                if (isset($filterData['minPrice']) && isset($filterData['maxPrice'])) {
                    $query->orWhere(function ($q) use ($filterData) {
                        $q->whereBetween('price', [$filterData['minPrice'], $filterData['maxPrice']]);
                    });
                }
                



                // Uncomment and adapt the following sections if needed

                // Filters on Amenities attributes
                // if (isset($filterData['amenity_attribute'])) {
                //     $query->orWhereHas('amenities', function ($q) use ($filterData) {
                //         $q->where('attribute_name', 'LIKE', '%' . $filterData['amenity_attribute'] . '%');
                //     });
                // }

                // Filters on PropertyRecordFiles attributes
                // if (isset($filterData['file_attribute'])) {
                //     $query->orWhereHas('propertyRecordFiles', function ($q) use ($filterData) {
                //         $q->where('attribute_name', 'LIKE', '%' . $filterData['file_attribute'] . '%');
                //     });
                // }
            });

            // Eager load relationships
            $query->with(['propertyListingPape', 'amenities', 'propertyRecordFiles']);

            // Execute the query and return the results  
            $propertyInfo = $query->get();

            return response()->json(['propertyInfo' => $propertyInfo]);
        } catch (\Exception $e) {
            Log::error('Error creating property records: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
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
