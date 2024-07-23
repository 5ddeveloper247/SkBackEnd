<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Validator;

class TestimonialsController extends Controller
{
    //
    public function viewTestimonials(Request $request)
    {
        return view('Backend.admin.testimonials.testimonials');
    }

    public function viewTestimonialAjax(Request $request)
    {
        try {
            // Fetch testimonials sorted by created_at in descending order
            $testimonials = Testimonial::orderBy('created_at', 'desc')->get();

            if ($testimonials->isEmpty()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'No testimonials found.'
                ], 404);
            }

            return response()->json([
                'status' => 'success',
                'data' => $testimonials
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'An error occurred while fetching testimonials.',
                'error' => $e->getMessage()
            ], 500);
        }
    }





    public function deleteTestimonial(Request $request)
    {

        try {
            // Find the testimonial by ID or throw a ModelNotFoundException
            $testimonial = Testimonial::findOrFail($request->del_id);

            // Delete the testimonial
            $testimonial->delete();

            return response()->json([
                'status' => 200,
                'message' => 'Testimonial deleted successfully.'
            ]);
        } catch (Exception $e) {
            // Log the error and return a not found response
            Log::error('Testimonial not found: ' . $e->getMessage());
            return response()->json([
                'status' => 404,
                'message' => 'Testimonial not found.'
            ]);
        } catch (Exception $e) {
            // Log the error and return a server error response
            Log::error('Error deleting testimonial: ' . $e->getMessage());
            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete the testimonial.'
            ]);
        }
    }




    public function addTestimonial(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'testimonial_name' => 'required|string|max:500',
            'testimonial_title' => 'required|string|max:500',
            'testimonial_description' => 'required|string |max:500',
            'pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ], 400);
        }

        try {
            // Handle the image upload
            $imagePath = null;
            if ($request->hasFile('pic')) {
                $file = $request->file('pic');
                $fileName = uniqid('media_') . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $fileName);
                $imagePath = 'uploads/' . $fileName; // Ensure file path is relative to the public directory
            }

            // Create the testimonial
            $testimonial = Testimonial::create([
                'name' => $request->testimonial_name,
                'title' => $request->testimonial_title,
                'description' => $request->testimonial_description,
                'image_url' => $imagePath,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Testimonial added successfully',
                'data' => $testimonial,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while adding the testimonial',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    public function updateTestimonial(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'edit_id' => 'required|exists:testimonials,id',
            'testimonial_name_edit' => 'required|string|max:500',
            'testimonial_title_edit' => 'required|string|max:500',
            'testimonial_description_edit' => 'required|string|max:500',
            'pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->errors(),
            ], 400);
        }

        try {
            // Find the existing testimonial
            $testimonial = Testimonial::find($request->edit_id);

            // Handle the image upload if a new image is provided
            if ($request->hasFile('pic')) {
                $file = $request->file('pic');
                $fileName = uniqid('media_') . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads'), $fileName);
                $imagePath = 'uploads/' . $fileName; // Ensure file path is relative to the public directory
                $testimonial->image_url = $imagePath;
            }

            // Update the testimonial
            $testimonial->name = $request->testimonial_name_edit;
            $testimonial->title = $request->testimonial_title_edit;
            $testimonial->description = $request->testimonial_description_edit;
            $testimonial->save();

            return response()->json([
                'status' => 200,
                'message' => 'Testimonial updated successfully',
                'data' => $testimonial,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'An error occurred while updating the testimonial',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
