<?php

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

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/destination/{subpage}', function ($subpage) {
    return view('pages/destination')->with('subpage', $subpage);
});

Route::get('/crew/{subpage}', function ($subpage) {
    return view('pages/crew')->with('subpage', $subpage);
});

Route::get('/tech/{subpage}', function ($subpage) {
    return view('pages/tech')->with('subpage', $subpage);
});
