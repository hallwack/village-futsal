<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    public function index()
    {
        return view('sign-in');
    }

    public function authenticate(Request $request)
    {
    }

    public function logout(Request $request)
    {
        Auth::guard('auth')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
