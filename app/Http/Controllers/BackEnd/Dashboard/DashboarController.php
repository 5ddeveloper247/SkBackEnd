<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalInfo;
use App\Models\Contact;
use App\Models\Inquiry;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DashboarController extends Controller
{
    //0

    public function Dashboard(Request $request)
    {
        $adminUsers = User::where('role', 'admin')->count();
        $propertyListings = PersonalInfo::all()->count();
        $activePropertyListings = PersonalInfo::where('status', '1')->count();
        $inactivePropertyListings = PersonalInfo::where('status', '0')->count();
        $pendingContacts = Contact::whereNull('contact_reply_edit')->count();

        // Pass variables to the view
        return view('Backend.admin.dashboard.dashboard', [
            'adminUsers' => $adminUsers,
            'propertyListings' => $propertyListings,
            'activePropertyListings' => $activePropertyListings,
            'inactivePropertyListings' => $inactivePropertyListings,
            'pendingContacts' => $pendingContacts,
        ]);
    }



    public function chartAjax(Request $request)
    {
        // Get inquiries created in the last 15 days
        $inquiries = Inquiry::whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()])->get();

        // Initialize arrays to hold the dates and counts of inquiries per date
        $inquiriesDates = [];
        $inquiriesCounts = [];
        $inquiriesCountMap = [];

        foreach ($inquiries as $inquiry) {
            $date = $inquiry->created_at->toDateString();
            if (!isset($inquiriesCountMap[$date])) {
                $inquiriesCountMap[$date] = 0;
            }
            $inquiriesCountMap[$date]++;
        }

        foreach ($inquiriesCountMap as $date => $count) {
            $inquiriesDates[] = $date;
            $inquiriesCounts[] = $count;
        }

        // Get properties for Rent created in the last 15 days
        $queryRent = PersonalInfo::query();
        $propertiesRent = $queryRent->whereHas('propertyListingPape', function ($query) {
            $query->where('purpose_purpose', 'Rent');
        })->whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()])
            ->get();

        // Get properties for Sale created in the last 15 days
        $querySale = PersonalInfo::query();
        $propertiesSale = $querySale->whereHas('propertyListingPape', function ($query) {
            $query->where('purpose_purpose', 'Sale');
        })->whereBetween('created_at', [Carbon::now()->subDays(15), Carbon::now()])
            ->get();

        // Initialize arrays to hold the dates and counts of properties for Rent per date
        $propertiesRentDates = [];
        $propertiesRentCounts = [];
        $propertiesRentCountMap = [];

        foreach ($propertiesRent as $property) {
            $date = $property->created_at->toDateString();
            if (!isset($propertiesRentCountMap[$date])) {
                $propertiesRentCountMap[$date] = 0;
            }
            $propertiesRentCountMap[$date]++;
        }

        foreach ($propertiesRentCountMap as $date => $count) {
            $propertiesRentDates[] = $date;
            $propertiesRentCounts[] = $count;
        }

        // Initialize arrays to hold the dates and counts of properties for Sale per date
        $propertiesSaleDates = [];
        $propertiesSaleCounts = [];
        $propertiesSaleCountMap = [];

        foreach ($propertiesSale as $property) {
            $date = $property->created_at->toDateString();
            if (!isset($propertiesSaleCountMap[$date])) {
                $propertiesSaleCountMap[$date] = 0;
            }
            $propertiesSaleCountMap[$date]++;
        }

        foreach ($propertiesSaleCountMap as $date => $count) {
            $propertiesSaleDates[] = $date;
            $propertiesSaleCounts[] = $count;
        }

        // Merge Rent and Sale properties data
        $propertiesDates = array_unique(array_merge($propertiesRentDates, $propertiesSaleDates));
        sort($propertiesDates);

        $propertiesRentCountsMerged = [];
        $propertiesSaleCountsMerged = [];

        foreach ($propertiesDates as $date) {
            $propertiesRentCountsMerged[] = $propertiesRentCountMap[$date] ?? 0;
            $propertiesSaleCountsMerged[] = $propertiesSaleCountMap[$date] ?? 0;
        }

        return response()->json([
            'inquiriesDates' => $inquiriesDates,
            'inquiriesCounts' => $inquiriesCounts,
            'propertiesDates' => $propertiesDates,
            'propertiesRentCounts' => $propertiesRentCountsMerged,
            'propertiesSaleCounts' => $propertiesSaleCountsMerged,
        ]);
    }




    //create amdins
    public function createAdmins(Request $request)
    {
        $rules = [
            'EmailInput' => 'required|email|max:50',
            'FullNameInput' => 'required|string|max:50',
            'PasswordInput' => 'required|string|max:50',
            //'PhoneInput' => 'required|string',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return errors in JSON format
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation succeeds, create a new user
        try {
            $user = new User();
            $user->email = $request->EmailInput;
            $user->name = $request->FullNameInput;
            $user->password = Hash::make($request->PasswordInput);
            $user->role = "admin";
            if ($request->has('AddStatusInput')) {
                $user->status = '1'; // Convert checkbox value to boolean
            } else {
                $user->status = '0'; // Convert checkbox value to boolean
            }
            // Save the user
            $user->save();
            // Return success message in JSON format
            return response()->json(['message' => 'User created successfully', 'user' => $user], 200);
        } catch (\Exception $e) {
            // Return failure message in JSON format
            return response()->json(['message' => 'Failed to create user', 'error' => $e->getMessage()], 500);
        }
    }





    public function createUsers(Request $request)
    {
        $rules = [
            'createEmailInput' => 'required|email',
            'createFullNameInput' => 'required|string',
            'createPasswordInput' => 'required|string',
            'createPhoneInput' => 'required|string',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return errors in JSON format
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation succeeds, create a new user
        try {
            $user = new User();
            $user->email = $request->createEmailInput;
            $user->name = $request->createFullNameInput;
            $user->password = Hash::make($request->createPasswordInput);
            $user->role = "user";
            //   $user->phone = $request->createPhoneInput;
            $user->status = $request->has('createStatusInput') ? true : false; // Assuming status is boolean

            // Save the user
            $user->save();

            // Return success message in JSON format
            return response()->json(['message' => 'User created successfully'], 200);
        } catch (\Exception $e) {
            // Return failure message in JSON format
            return response()->json(['message' => 'Failed to create user'], 500);
        }
    }
}
