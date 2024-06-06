<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;

class ContactUsController extends Controller
{
    //
    public function StoreContact(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'companyName' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'messag' => 'required|string',
        ]);

        // If validation fails, return a 400 response with the errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // Create a new contact record
        $contact = Contact::create([
            'full_name' => $request->input('fullName'),
            'email' => $request->input('email'),
            'company_name' => $request->input('companyName'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Return a 201 response with the created contact record
        return response()->json(['contact' => $contact], 201);
    }
}
