<?php

namespace App\Http\Controllers;

use App\Enums\TimeList;
use App\Http\Requests\Diary\CreateRequest;
use App\Services\DiaryRegisterService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    function index()
    {
        $timeList = TimeList::cases();
        return view('pages/create');
    }

    function register(CreateRequest $request, DiaryRegisterService $service)
    {
        $service->register($request);
        return redirect()->route('note');
    }
}