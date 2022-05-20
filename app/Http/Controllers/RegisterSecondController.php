<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'imgInput' => ['image', 'file']
        ]);
        // dd($request);

        $item = [];

        if ($request->file('imgInput')) {
            $item['user_image'] = $request->file('imgInput')->store('user-images');
        }

        User::where('id', $request->session()->pull('user_id'))->update($item);

        return redirect()->route('login');
    }
}
