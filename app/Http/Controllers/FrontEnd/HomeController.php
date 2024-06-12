<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PersonalInfo;
use App\Models\PropertyListingPaPe;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Helpers\WhatsAppHelper;
use Exception;
use App\Models\City;

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
            // Start the transaction
            DB::beginTransaction();

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
            try {
                // Send email
                $body = view('mail.mail_templates.common')->render();
                $userEmailsSend[] = env('ADMIN_EMAIL_ADDRESS');
                $userEmailsSend[] = $request->email;



                // Send WhatsApp message
                $adminContact = env('ADMIN_WHATSAPP_NUMBER');
                $phoneno = [$request->phone ? $request->phone : $adminContact, $adminContact];
                $message = $request->description ? $request->description : "No description is specified for this property";
                $id = 123;


                // Call the helper method
                try {
                    WhatsAppHelper::sendMessages($phoneno, $message, $id);
                } catch (Exception $e) {
                    // Log the error if sending WhatsApp message fails
                    Log::error('Error sending WhatsApp message on contact us from user side submission: ' . $e->getMessage());
                }
                // to username, to email, from username, subject, body html 
                $response = sendMail('devofd172@gmail.com', $userEmailsSend, 'Sk Property', 'Thanks For submitting property detail', $body);
            } catch (Exception $e) {
                // Log the error if email sending fails
                Log::error('Error sending email on property listing from user side: ' . $e->getMessage());
            }


            // Commit the transaction
            DB::commit();

            // Return success response
            return response()->json([
                'success' => true,
                'personalInfoRecord' => $personalInfoRecord
            ], 201);
        } catch (Exception $e) {
            // Rollback the transaction
            DB::rollBack();

            // Log the error
            Log::error('Error creating property records  abc: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }




    public function propertyHomeView(Request $request)
    {

        $propertyInfo = PersonalInfo::with('propertyListingPape', 'amenities', 'propertyRecordFiles')->where('status','1')->get();
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
        } catch (Exception $e) {
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
                    if ($filterData['purpose'] == 'All') {
                        $query->whereHas('propertyListingPape', function ($q) {
                            $q->whereIn('purpose_purpose', ['Rent', 'Sale']);
                        });
                    } else {
                        $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                            $q->where('purpose_purpose', 'LIKE', '%' . $filterData['purpose'] . '%');
                        });
                    }
                }

                if (isset($filterData['area']) && !empty($filterData['area'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_area', $filterData['area']);
                    });
                }
                if (isset($filterData['city']) && !empty($filterData['city'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_city', $filterData['city']);
                    });
                }
                if (isset($filterData['commercial']) && !empty($filterData['commercial'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('purpose_commercial', $filterData['commercial']);
                    });
                }
                if (isset($filterData['homeType']) && !empty($filterData['homeType'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('pupose_home', $filterData['homeType']);
                    });
                }
                if (isset($filterData['plot']) && !empty($filterData['plot'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('purpose_plot', $filterData['plot']);
                    });
                }
                if (isset($filterData['sector']) && !empty($filterData['sector'])) {
                    $query->whereHas('propertyListingPape', function ($q) use ($filterData) {
                        $q->whereIn('address_sector', $filterData['sector']);
                    });
                }
                if (isset($filterData['minPrice']) && isset($filterData['maxPrice'])) {
                    $query->whereBetween('price', [$filterData['minPrice'], $filterData['maxPrice']]);
                }
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


    public function composableCity(Request $request){
        $cityData = City::with('areas.locations.sectors')->get();
        if($cityData){
            return response()->json(['cityData'=>$cityData],200);
        }
        else{ 
            return response()->json(['cityData'=>[]],200);
        }
    }
}
