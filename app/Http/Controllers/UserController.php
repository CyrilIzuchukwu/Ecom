<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function store(Request $request)
    {
        //validation of inputs
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email|max:255,string',
            'phone' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|min:5|max:40',
            'confirm_password' => 'required|min:5|max:40|same:password',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $save = $user->save();
        if ($save) {
            return redirect()->route('login')->with('message', 'Registration Successful');
        } else {
            return redirect()->back()->with('error', 'Registration failed');
        }
    }

    // logout
    public function user_logout()
    {
        Auth::guard('web')->logout();
        return redirect('/')->with('message', 'You have successfully logged out');
    }
}
