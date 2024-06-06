<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;

class InquiryController extends Controller
{
    //

    public function StoreInquiry(Request $request)
    {
        $validatedData = $request->validate([
            'location' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|integer',
            'description' => 'required|string',
            'agent' => 'nullable|array',
            'informed_me' => 'nullable|boolean',
        ]);

        $inquiry = Inquiry::create($validatedData);

        return response()->json(['success' => true, 'inquiry' => $inquiry], 201);
    }
}
