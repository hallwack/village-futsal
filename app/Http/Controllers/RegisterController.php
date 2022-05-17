<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('admin.auth.sign-up');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => [
                'required', 'confirmed',
                // Password::min(8)
                //     ->letters()
                //     ->uncompromised()
            ],
            'password_confirmation' => ['required', 'same:password', 'required_with:password']
        ]);

        // $item = [];
        $item['name'] = $request->name;
        $item['username'] = $request->username;
        $item['email'] = $request->email;
        $password = $request->password;
        $item['password'] = bcrypt($password);

        // $request->validated();
        dd($request);
        // Admin::create($item);
    }
}
