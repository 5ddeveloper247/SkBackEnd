<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    //

    public function viewInquiries(Request $request){
      //  $inquiriesData=Inquiry::where('status','awaitngToResponse');
        return view('Backend.admin.inquiry.inquiry');
    }
}
