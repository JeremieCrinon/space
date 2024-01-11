<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/home', function () {
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
