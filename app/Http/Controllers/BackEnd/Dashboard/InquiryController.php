<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use App\Models\Setting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Helpers\WhatsAppHelper;

class InquiryController extends Controller
{
  //

  public function viewInquiries(Request $request)
  {
    //$inquiriesData=Inquiry::where('status','awaitngToResponse');
    return view('Backend.admin.inquiry.inquiry');
  }




  public function updateInquiries(Request $request)
  {


    // Validate the request data

    $request->validate([
      'edit_id' => 'required|integer|exists:inquiries,id',
      'inquiry_description_edit' => 'nullable|string|max:2550',
    ]);

    try {
      // Find the inquiry with the specified conditions
      $inquiry = Inquiry::where('id', $request->edit_id)
        ->first();

      // If the inquiry exists, update its details
      if ($inquiry) {
        $inquiry->reply = $request->inquiry_reply_edit ?? '';
        $inquiry->status = 'completed';
        $inquiry->save();
        $site_user_phone_num = $inquiry->phone;

        try {
          // Send email
          $body = view('mail.mail_templates.inquiry_reply', ['inquiryData' => $inquiry])->render();
          // $adminEmailsSend[] = env('ADMIN_EMAIL_ADDRESS');
          $adminEmailsSend = Setting::whereNotNull('admin_email')->value('admin_email');

          $userEmailsSend[] = $request->email;
          // to username, to email, from username, subject, body html 
          $response = sendMail($inquiry->name, $userEmailsSend, 'Sk Property', 'Inquiry replied by Sk Property', $body);
          $response2 = sendMail($inquiry->name, $adminEmailsSend, 'Sk Property', 'Inquiry replied by Sk Property', $body);
          Log::info('at: ' . now());
          Log::info('Email inquiry response 1: ' . $response);
          Log::info('Email inquiry response 2: ' . $response2);
        } catch (Exception $e) {
          // Log the error if email sending fails
          Log::error('Error sending email on inquiry reply from admin side submission: ' . $e->getMessage());
        }


        // Send WhatsApp message
        $adminContact = env('ADMIN_WHATSAPP_NUMBER');
        $phoneno = [$site_user_phone_num, $adminContact];
        $message = $request->inquiry_reply_edit ?? "An empty response was submitted in response";
        $id = 123;


        // Call the helper method
        try {
          WhatsAppHelper::sendMessages($phoneno, $message, $id);
        } catch (Exception $e) {
          // Log the error if sending WhatsApp message fails
          Log::error('Error sending WhatsApp message on contact us from user side submission: ' . $e->getMessage());
        }
        return redirect()->back()->with('success', 'Inquiry edited successfully.');
      }

      // If the inquiry does not exist, return an error response
      return redirect()->back()->with('error', 'Inquiry not found or already completed.');
    } catch (Exception $e) {
      // Log the error and return an error response
      Log::error('Error updating inquiry: ' . $e->getMessage());
      return redirect()->back()->with('error', 'Failed to update the inquiry.');
    }
  }



  public function deleteInquiries(Request $request)
  {

    try {

      // Find the inquiry with the specified conditions
      $inquiry = Inquiry::where('id', $request->del_id)->first();

      // If the inquiry exists, delete it
      if ($inquiry) {
        $inquiry->delete();
        return response()->json([
          'status' => 200,
          'message' => 'Inquiry deleted successfully.'
        ]);
      }

      // If the inquiry does not exist, return an error response
      return response()->json([
        'status' => 404,
        'message' => 'Inquiry not found or already completed.'
      ]);
    } catch (Exception $e) {
      // Log the error and return an error response
      Log::error('Error deleting inquiry: ' . $e->getMessage());
      return response()->json([
        'status' => 500,
        'message' => 'Failed to delete the inquiry.'
      ]);
    }
  }


  public function viewInquiriesAjax(Request $request)
  {
    try {
      // Fetch all inquiries ordered by latest first
      $inquiriesData = Inquiry::where('status', 'uploaded')
        ->whereNull('reply')
        ->orderBy('created_at', 'desc')
        ->get();

      // Check if data is retrieved successfully
      if ($inquiriesData->isNotEmpty()) {
        return response()->json([
          'success' => true,
          'data' => $inquiriesData
        ], 200);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'No inquiries found.'
        ], 404);
      }
    } catch (Exception $e) {
      // Log the error
      Log::error('Error fetching inquiries: ' . $e->getMessage());

      // Return error response
      return response()->json([
        'success' => false,
        'message' => 'Failed to fetch inquiries.',
        'error' => $e->getMessage()
      ], 500);
    }
  }





  public function viewRepliedInquiriesAjax(Request $request)
  {
    try {
      // Fetch all inquiries ordered by latest first
      $inquiriesData = Inquiry::where('status', 'completed')
        ->whereNotNull('reply')
        ->orderBy('created_at', 'desc')
        ->get();

      // Check if data is retrieved successfully
      if ($inquiriesData->isNotEmpty()) {
        return response()->json([
          'success' => true,
          'data' => $inquiriesData
        ], 200);
      } else {
        return response()->json([
          'success' => false,
          'message' => 'No inquiries found.'
        ], 404);
      }
    } catch (Exception $e) {
      // Log the error
      Log::error('Error fetching inquiries: ' . $e->getMessage());

      // Return error response
      return response()->json([
        'success' => false,
        'message' => 'Failed to fetch inquiries.',
        'error' => $e->getMessage()
      ], 500);
    }
  }
}
