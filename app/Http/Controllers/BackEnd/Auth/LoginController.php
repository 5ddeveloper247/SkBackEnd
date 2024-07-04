<?php

namespace App\Http\Controllers\BackEnd\Auth;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //

    public function index(Request $request)
    {

        return view('Backend.admin.auth.login');
    }




    public function handleLogin(Request $request)
    {
        // Define the validation rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20',
        ];
    
        // Validate the request data
        $validator = Validator::make($request->all(), $rules);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Attempt to log the user in
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Check if the user's status is 1
            $user = Auth::user();
            if ($user->status == 1) {
                // Authentication and status check passed
                return redirect()->intended('admin/dashboard'); // Redirect to intended route 
            } else {
                // Log the user out if status is not 1
                Auth::logout();
                return redirect()->back()->with('error', 'Your account is inactive.');
            }
        }
    
        // Authentication failed
        // return redirect()->back()->with('error', 'Invalid email or password.');
        return redirect()->back()->withInput()->with('error', 'Invalid email or password.');

    }
    



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('admin/login')->with('status', 'You have been logged out.');
    }
}
