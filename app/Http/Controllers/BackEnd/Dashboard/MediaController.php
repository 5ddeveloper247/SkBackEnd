<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AddMediaUrl;
use App\Models\MediaOnly;

class MediaController extends Controller
{
    //



    public function viewMedia(Request $request)
    {
        $mediaOnlyRecords =  MediaOnly::all();
        $mediaUrl =  AddMediaUrl::all();
        // Convert YouTube URLs to embed URLs
        $mediaUrl->transform(function ($mediaRecord) {
            if (isset($mediaRecord->url) && !empty($mediaRecord->url)) {
                $mediaRecord->url = convertYouTubeUrlToEmbed($mediaRecord->url);
            }
            return $mediaRecord;
        });

        return view('Backend.admin.media.media', ['mediaOnlyRecords' => $mediaOnlyRecords, 'mediaUrl' => $mediaUrl]);
    }



    public function mediaonlyDelete(Request $request)
    {
        // dd($request);
        $mediaId = $request->id;
        $media = MediaOnly::find($mediaId);
        if ($media) {
            $media->delete();
            return redirect()->back()->with('success', "Media Deleted Successfully");
        } else {
            return redirect()->back()->with('error', "Media Not Deleted");
        }
    }
    public function mediaurlDelete(Request $request)
    {
        $mediaId = $request->id;
        $media = AddMediaUrl::find($mediaId);
        if ($media) {
            $media->delete();
            return redirect()->back()->with('success', "Media Deleted Successfully");
        } else {
            return redirect()->back()->with('error', "Media Not Deleted");
        }
    }

    public function createMedia(Request $request)
    {
        $rules = [
            'mediaUrlTitle' => 'required|string|max:100',
            // 'mediaUrlDescription' => 'required|string',
            'mediaUrl' => 'required|url|max:200', // Adjust mime types and max size as needed
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {


            $media = new AddMediaUrl(); // Assuming you have a Media model
            $media->title = $request->mediaUrlTitle;
            $media->url = $request->mediaUrl;
            $media->description = $request->mediaUrlDescription;

            $media->save();

            return response()->json(['message' => 'Media added successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add media'], 500);
        }
    }





    public function uploadMedia(Request $request)
    {
        // Define the validation rules
        $rules = [
            'mediaOnlyTitle' => 'required|string|max:255',
            // 'mediaOnlyDescription' => 'required|string',
            'mediaOnlyfile' => 'required|file|mimes:jpg,jpeg,png,gif,mp4,mov,avi,wmv|max:20480', // Adjust mime types and max size as needed
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if the validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $filePath = null;
            if ($request->hasFile('mediaOnlyfile')) {
                $file = $request->file('mediaOnlyfile');
                $fileName = uniqid('media_') . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $fileName);
                $filePath = 'uploads/' . $fileName; // Ensure file path is relative to the public directory
            }

            // Assuming you have a MediaOnly model
            $media = new MediaOnly();
            $media->title = $request->mediaOnlyTitle;
            $media->description = $request->mediaOnlyDescription;
            $media->url = $filePath;
            $media->save();

            return response()->json(['message' => 'Media added successfully', 'filePath' => $filePath], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to add media', 'error' => $e->getMessage()], 500);
        }
    }
}
