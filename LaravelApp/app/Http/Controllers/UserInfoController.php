<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class UserInfoController extends Controller
{
    //
   

    function show_form(){
        return view('registration');
    }

    public function submit_form(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|string|max:15',
            'phone_number' => 'nullable|string|max:15',
            'address_string' => 'nullable|string|max:255',
        ]);
    
        try {
            // Create a new user
            UserInfo::create([
                'first_name' => $request->input('first_name'),
                'last_name' => $request->input('last_name'),
                'middle_name' => $request->input('middle_name'),
                'birth_date' => $request->input('birthday'),
                'gender' => $request->input('gender'),
                'phone_number' => $request->input('phone'),
                'address_string' => $request->input('address'),
            ]);
    
            // Registration was successful
            $response = ['status' => 'success', 'message' => 'Registration successful!'];
            // route to log in page
    
        } catch (\Exception $e) {
            // Registration failed
            $response = ['status' => 'error', 'message' => 'Registration failed. Please try again.'];
        }
    
        // Return JSON response for AJAX handling
        return response()->json($response);
    }

    function test(){
        return view('sample');
    }
    // function registrationPost(Request $request){
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required'
    //     ]);

    //     $data['name'] = $request->name;
    //     $data['email'] = $request->email;
    //     $data['password'] = Hash::make($request->password);
    //     $user = User::create($data);

    //     if(!$user){
    //         return redirect(route('registration'))->with("error", 'try again');
    //     }

    //     return redirect(route('login'))->with('success', 'try logging in');
    // }
}
?>

