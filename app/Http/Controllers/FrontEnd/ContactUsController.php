<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Exception;
use App\Models\Contact;
use App\Helpers\WhatsAppHelper;

class ContactUsController extends Controller
{
    public function StoreContact(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'fullName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'companyName' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
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

        try {
            // Send email
            $body = view('mail.mail_templates.common')->render();
            $userEmailsSend[] = env('ADMIN_EMAIL_ADDRESS');
            $userEmailsSend[] = $request->email;
            // to username, to email, from username, subject, body html 
            $response = sendMail('devofd172@gmail.com', $userEmailsSend, 'Sk Property', 'Thanks For Contacting', $body);
        } catch (Exception $e) {
            // Log the error if email sending fails
            Log::error('Error sending email on contact us from user side submission: ' . $e->getMessage());
        }

        // Send WhatsApp message
        $adminContact=env('ADMIN_WHATSAPP_NUMBER');
        $phoneno = [923106835826,$adminContact];
        $message = "Hello whatsapp";
        $id = 123;


        // Call the helper method
        try {
            WhatsAppHelper::sendMessages($phoneno, $message, $id);
        } catch (Exception $e) {
            // Log the error if sending WhatsApp message fails
            Log::error('Error sending WhatsApp message on contact us from user side submission: ' . $e->getMessage());
        }
        // Return a 201 response with the created contact record
        return response()->json(['contact' => $contact], 201);
    }
}
