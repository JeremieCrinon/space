<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Language;


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

Route::get('/', function () {
    return view('pages/home');
})->middleware('language');

Route::get('/destination/{subpage}', function ($subpage) {
    return view('pages/destination')->with('subpage', $subpage);
})->middleware('language');

Route::get('/crew/{subpage}', function ($subpage) {
    return view('pages/crew')->with('subpage', $subpage);
})->middleware('language');

Route::get('/tech/{subpage}', function ($subpage) {
    return view('pages/tech')->with('subpage', $subpage);
})->middleware('language');

Route::get('language/{lang}', [LanguageController::class, 'switch'])->name('language.switch');
