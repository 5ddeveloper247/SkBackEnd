<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\Testimonial;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
            $testimonials = Testimonial::all();

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
            // Find the inquiry with the specified conditions
            $testimonial = Testimonial::where('id', $request->del_id)->first();

            // If the inquiry exists, delete it
            if ($testimonial) {
                $testimonial->delete();
                return response()->json([
                    'status' => 200,
                    'message' => 'deleted successfully.'
                ]);
            }

            // If the inquiry does not exist, return an error response
            return response()->json([
                'status' => 404,
                'message' => 'testimonial not found or already completed.'
            ]);
        } catch (Exception $e) {
            // Log the error and return an error response
            Log::error('Error deletingtestimonial: ' . $e->getMessage());
            return response()->json([
                'status' => 500,
                'message' => 'Failed to delete the testimonial.'
            ]);
        }
    }
}
