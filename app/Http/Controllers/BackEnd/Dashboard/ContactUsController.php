<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Helpers\WhatsAppHelper;

class ContactUsController extends Controller
{
    //

    public function viewContact(Request $request)
    {
        //$inquiriesData=Inquiry::where('status','awaitngToResponse');
        return view('Backend.admin.contactus.contactus');
    }




    public function updateContact(Request $request)
    {


        // Validate the request data
        $request->validate([
            'edit_id' => 'required|integer|exists:contacts,id',
            'contact_reply_edit' => 'nullable|string|max:2550',
        ]);

        // return redirect()->back()->with('success', 'contact reply sent successfully.');
        try {
            // Find the inquiry with the specified conditions
            $contact = Contact::where('id', $request->edit_id)
                ->first();

            // If the inquiry exists, update its details
            if ($contact) {
                $contact->contact_reply_edit = $request->contact_reply_edit ?? '';
                $contact->save();
                $site_user_phone_num = $contact->phone ?? " ";
                try {
                    //Send email
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
                $adminContact = env('ADMIN_WHATSAPP_NUMBER');
                $phoneno = [$site_user_phone_num, $adminContact];
                $message = $request->contact_reply_edit ?? "There is no content or empty found in reply from Sk Marketing on contact us query!";
                $id = 123;


                // Call the helper method
                try {
                    WhatsAppHelper::sendMessages($phoneno, $message, $id);
                } catch (Exception $e) {
                    // Log the error if sending WhatsApp message fails
                    Log::error('Error sending WhatsApp message on contact us from user side submission: ' . $e->getMessage());
                }
                return redirect()->back()->with('success', 'contact reply sent successfully.');
            }

            // If the inquiry does not exist, return an error response
            return redirect()->back()->with('error', 'Contact detail not found.');
        } catch (Exception $e) {
            // Log the error and return an error response
            Log::error('Error while sending reply to user on contact: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to send reply on contact.');
        }
    }



    public function deleteContact(Request $request)
    {
        try {
            // Find the inquiry with the specified conditions
            $contact = Contact::where('id', $request->del_id)->first();

            // If the inquiry exists, delete it
            if ($contact) {
                $contact->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'contact deleted successfully.'
                ]);
            }

            // If the inquiry does not exist, return an error response
            return response()->json([
                'status' => 404,
                'message' => 'contact not found or already completed.'
            ]);
        } catch (Exception $e) {
            // Log the error and return an error response
            Log::error('Error deleting contact: ' . $e->getMessage());
            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete the contact.'
            ]);
        }
    }

    public function deleteRepliedContact(Request $request)
    {
        try {

            // Find the inquiry with the specified conditions
            $contact = Contact::where('id', $request->del_replied_id)->first();

            // If the inquiry exists, delete it
            if ($contact) {
                $contact->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'contact deleted successfully.'
                ]);
            }

            // If the inquiry does not exist, return an error response
            return response()->json([
                'status' => 404,
                'message' => 'contact not found or already completed.'
            ]);
        } catch (Exception $e) {
            // Log the error and return an error response
            Log::error('Error deleting contact: ' . $e->getMessage());
            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete the contact.'
            ]);
        }
    }


    public function viewContactAjax(Request $request)
    {
        try {
            // Fetch all inquiries
            $contactData = DB::table('contacts')->where('contact_reply_edit', Null)->get();
            // $contactData = Contact::where('contact_reply_edit', null);
            if ($contactData) {
                return response()->json([
                    'success' => true,
                    'data' => $contactData
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No data found for contacts.'
                ], 404);
            }
        } catch (Exception $e) {
            // Log the error
            Log::error('Error fetching inquiries: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch contact us data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
    public function viewRepliedContactAjax(Request $request)
    {
        try {
            // Fetch all inquiries
            $contactData = DB::table('contacts')->whereNotNull('contact_reply_edit')->get();
            // $contactData = Contact::where('contact_reply_edit', null);
            if ($contactData) {
                return response()->json([
                    'success' => true,
                    'data' => $contactData
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'No data found for contacts.'
                ], 404);
            }
        } catch (Exception $e) {
            // Log the error
            Log::error('Error fetching inquiries: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch contact us data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
