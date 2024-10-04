<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    function update(int $id)
    {
        return view('pages/create');
    }
    
}
