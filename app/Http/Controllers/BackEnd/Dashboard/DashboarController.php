<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PersonalInfo;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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



    //create amdins
    public function createAdmins(Request $request)
    {
        $rules = [
            'EmailInput' => 'required|email',
            'FullNameInput' => 'required|string',
            'PasswordInput' => 'required|string',
            // 'PhoneInput' => 'required|string',
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
            $user->status='1';
            //   $user->phone = $request->createPhoneInput;
            $user->status = $request->has('StatusInput') ? true : false; // Assuming status is boolean

            // Save the user
            $user->save();

            // Return success message in JSON format
            return response()->json(['message' => 'User created successfully'], 200);
        } catch (\Exception $e) {
            // Return failure message in JSON format
            return response()->json(['message' => 'Failed to create user'], 500);
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
