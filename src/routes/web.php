<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\MypageController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("login", [LoginController::class, "login"])->name("login");
Route::post("login", [LoginController::class, "submit"])->name("submit");

Route::get("register", [RegisterController::class, "register"]);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get("", [CalendarController::class, "calendar"])->name("top");
    
    Route::get("delete/{id}", [DeleteController::class, "delete"])->name("delete");

    Route::get("create", [CreateController::class, "index"])->name("create");
    Route::post("create", [CreateController::class, "register"])->name("create.register");

    Route::get("note", [NoteController::class, "note"])->name("note");

    Route::get("search", [SearchController::class, "search"])->name("search");
    
    Route::get("edit/{id}", [EditController::class, "edit"])->name("edit");
    Route::post("edit/{id}", [EditController::class, "register"])->name("edit.register");
    
    Route::get("mypage", [MypageController::class, "mypage"])->name("mypage");

});