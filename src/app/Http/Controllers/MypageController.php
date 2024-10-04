<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    function mypage()
    {
        return view('pages/mypage');
    }
}