<?php

namespace App\Services;

use App\Enums\TimeList;
use App\Http\Requests\Diary\CreateRequest;
use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryRegisterService
{
    function register(CreateRequest $request)
    {
        $record = new Diary();
        $record->when = $request->date("when");
        $record->feel = $request->integer("feel");
        $record->title = $request->input("title");
        $record->favorite = $request->boolean("favorite");
        $record->content = $request->input("content");
        $request->user()->diaries()->save($record);
    }

    function edit(CreateRequest $request, int $id)
    {
        // IDから対象の日記を取得
        $diary = $request->user()->diaries()->where([
            'id' => $id,
        ])->first();
        $diary->when = $request->date("when");
        $diary->feel = $request->integer("feel");
        $diary->title = $request->input("title");
        $diary->favorite = $request->boolean("favorite");
        $diary->content = $request->input("content");
        $diary->save();
    }
}
