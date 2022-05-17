<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $item['admin_name'] = $request->name;
        $item['admin_username'] = $request->username;
        $item['admin_email'] = $request->email;
        $password = $request->password;
        $item['admin_password'] = bcrypt($password);

        // $request->validated();
        // dd($request);
        Admin::create($item);

        return redirect()->route('auth.login');
    }
}
