<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddMediaUrl;

class MediaController extends Controller
{
    //
    public function mediaIndex(Request $request){
        $mediaUrls=AddMediaUrl::all();
        if($mediaUrls){
            return response()->json(['media'=>$mediaUrls,'status'=>200]);

        }else{
            return response()->json(['media'=>[],'status'=>500]);
        }
    }

   
}
