<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    function note(Request $request)
    {
        return view('pages/note', [
            "diaries" => $request->user()->diaries()->paginate(config('paginate.PAGINATE.SPLIT')),
        ]);
    }
}