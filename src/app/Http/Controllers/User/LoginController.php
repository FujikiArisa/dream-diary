<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login()
    {
        return view('pages/user/login');
    }

    public function submit(Request $request) {
        $credition = $request->only(["email", "password"]);

        if (Auth::attempt($credition)) {
            $request->session()->regenerate();
            return redirect(RouteServiceProvider::HOME);
        }
        return view("pages/user/login");
    }
}