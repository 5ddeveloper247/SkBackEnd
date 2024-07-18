<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{

    public function adminList(Request $request)
    {
        // Assuming 'role' is a column in your 'users' table to distinguish admins from other users.
        // Adjust the condition based on your actual schema.
        $dataAdmin = User::where('role', 'admin')->get();
        $adminCounter = $dataAdmin->count();
        $activeAdmins = User::where('role', 'admin')->where('status', '1')->count();
        $inactiveAdmins = User::where('role', 'admin')->where('status', '0')->count();
        $totalAdmins = User::where('role', 'admin')->count();

        return view('Backend.admin.user.admins', ['users' => $dataAdmin, 'adminCounter' => $adminCounter, 'activeAdmins' => $activeAdmins, 'inactiveAdmins' => $inactiveAdmins, 'totalAdmins' => $totalAdmins]);
    }


    public function viewAdmins(Request $request)
    {
        return view('Backend.admin.user.admins');
    }


    public function destroyAdmins(Request $request)
    {
        $user = User::find($request->id);

        if (!$user) {
            return response()->json(['error' => 'User not found.']);
        }

        if ($user->super_admin == 1) {
            return response()->json(['error' => 'You cannot delete a super admin.']);
        }

        $user->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }

    //
    public function userList(Request $request)
    {
        if ($request->ajax()) {
            $data = User::select('*')->where('role', 'user');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div class="btnRow">';
                    $btn .= '<a href="javascript:void(0)" class="view btn btn-info btn-sm" data-id="' . $row->id . '" data-user=\'' . json_encode($row) . '\'>View</a>';
                    //  $btn .= '<a href="javascript:void(0)" class="edit btn btn-warning btn-sm" data-id="' . $row->id . '" data-user=\'' . json_encode($row) . '\'>Update</a>';
                    $btn .= '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="' . $row->id . '" data-user=\'' . json_encode($row) . '\'>Delete</a>';
                    $btn .= '</div>';


                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('Backend.admin.user.users');
    }

    public function viewUsers(Request $request)
    {
        return view('Backend.admin.user.users');
    }

    public function updateAdmin(Request $request, $id)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email',
            // 'phone' => 'required|string',
            // 'password' => 'required|string',
            'status' => 'required|boolean'
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return errors in JSON format
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // If validation succeeds, update the user
        try {
            $user = User::findOrFail($id);
            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->password) {
                $user->password = Hash::make($request->password);
            }
            $user->status = $request->status;

            // Save the user
            $user->save();
            // Return success message in JSON format
            return response()->json(['message' => 'User updated successfully'], 200);
        } catch (\Exception $e) {
            // Return failure message in JSON format
            return response()->json(['message' => 'Failed to update user'], 500);
        }
    }


    public function destroyUsers(Request $rquest)
    {
        $user = User::find($rquest->id);
        $user->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }
}
