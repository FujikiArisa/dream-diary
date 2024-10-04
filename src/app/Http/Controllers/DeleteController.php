<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $diary = Diary::find($id);
        $diary->delete();
        return redirect()->route('top');
    }
}