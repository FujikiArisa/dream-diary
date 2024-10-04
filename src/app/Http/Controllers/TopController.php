<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class TopController extends Controller
{
    function top(Request $request)
    {
        return view('pages/top', [
            "diaries" => $request->user()->diaries,
        ]);
    }
}