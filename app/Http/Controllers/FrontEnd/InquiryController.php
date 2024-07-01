<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Inquiry;
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
            'phone' => 'nullable|integer',
            'description' => 'required|string',
            'agent' => 'nullable|array',
            'informed_me' => 'nullable|boolean',
        ]);
        try {
            // Send email
            $body = view('mail.mail_templates.common')->render();
            $userEmailsSend[] = env('ADMIN_EMAIL_ADDRESS');
            $userEmailsSend[] = $request->email;
            // to username, to email, from username, subject, body html 
            $response = sendMail('devofd172@gmail.com', $userEmailsSend, 'Sk Property', 'Thanks For Submitting inquiry', $body);
        } catch (Exception $e) {
            // Log the error if email sending fails
            Log::error('Error sending email on Inquiry from user side submission: ' . $e->getMessage());
        }


        // Send WhatsApp message
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
