<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Inquiry;
use App\Models\Setting;
use App\Helpers\WhatsAppHelper;
use Exception;

class InquiryController extends Controller
{
    //

    public function StoreInquiry(Request $request)
    {

        $validatedData = $request->validate([
            // 'location' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string',
            'description' => 'required|string',
            'agent' => 'nullable|string',
            'informed_me' => 'nullable|boolean',
        ]);
        $inquiryData = $request->all();
        try {
            // Send email
            $body = view('mail.mail_templates.inquiry', ['inquiryData' => $inquiryData])->render();
            $adminEmailsSend = Setting::whereNotNull('admin_email')->value('admin_email');
            $userEmailsSend = $request->email;
            // to username, to email, from username, subject, body html 
            $response = sendMail($request->name, $userEmailsSend, 'Sk Property', 'Thanks For Submitting inquiry', $body);
            $response2 = sendMail($request->name, $adminEmailsSend, 'Sk Property', 'New inquiry has submitted', $body);
            // Log the current timestamp and response 
            Log::info('at: ' . now());
            Log::info('Email response 1: ' . $response);
            Log::info('Email response 2: ' . $response2);
        } catch (Exception $e) {
            // Log the error if email sending fails
            Log::error('Error sending email on Inquiry from user side submission: ' . $e->getMessage());
        }


        // Send WhatsApp message
        // $adminContact = env('ADMIN_WHATSAPP_NUMBER');
        $adminContact = env('ADMIN_WHATSAPP_NUMBER');
        $phoneno = [$request->phone, $adminContact];
        $message = $request->description;
        $id = 123;


        // Call the helper method
        try {
            WhatsAppHelper::sendMessages($phoneno, $message, $id);
        } catch (Exception $e) {
            // Log the error if sending WhatsApp message fails
            Log::error('Error sending WhatsApp message on contact us from user side submission: ' . $e->getMessage());
        }

        $inquiry = Inquiry::create($validatedData);

        return response()->json(['success' => true, 'inquiry' => $inquiry], 201);
    }
}
