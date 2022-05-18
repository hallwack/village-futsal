<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterSecondController extends Controller
{
    public function index()
    {
        return view('sign-up-next');
    }

    public function store(Request $request)
    {
        $request->validate([
            'imgInput' => ['image']
        ]);

        // $item['user_avatar'] = $request->image;

        return redirect()->route('login');
    }
}
