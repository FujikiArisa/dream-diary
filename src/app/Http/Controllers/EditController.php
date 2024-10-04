<?php

namespace App\Http\Controllers;

use App\Http\Requests\Diary\CreateRequest;
use App\Services\DiaryRegisterService;
use Illuminate\Http\Request;

class EditController extends Controller
{
    function edit(Request $request, int $id)
    {
        // IDから対象の日記を取得
        $diary = $request->user()->diaries()->where([
            'id' => $id,
        ])->first();
        return view('pages/edit', [
            'diary' => $diary,
        ]);
    }

    function register(CreateRequest $request, int $id, DiaryRegisterService $service)
    {
        $service->edit($request, $id);
        return redirect()->route('note');
    }
}