<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sign-up');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required', 'same:password', 'required_with:password'],
            'phone_number' => ['required']
        ]);

        $item['user_name'] = $request->name;
        $item['user_username'] = $request->username;
        $item['user_email'] = $request->email;
        $item['user_phone'] = $request->phone_number;
        $password = $request->password;
        $item['user_password'] = bcrypt($password);

        $id = User::create($item)->id;

        $request->session()->put('user_id', $id);

        return redirect()->route('register-second');
    }
}
