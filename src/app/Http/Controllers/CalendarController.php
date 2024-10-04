<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    function calendar()
    {
        return view('pages/top');
    }
}