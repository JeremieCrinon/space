<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Middleware\Language;
use App\Http\Controllers\PlanetController;
use App\Http\Controllers\editWebsiteController;
use App\Http\Controllers\CrewController;


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

Route::get('/destination/{name}/{subpage}', [PlanetController::class, 'show'])->middleware('language');

Route::get('/crew/{subpage}', function ($subpage) {
    return view('pages/crew')->with('subpage', $subpage);
})->middleware('language');

Route::get('/tech/{subpage}', function ($subpage) {
    return view('pages/tech')->with('subpage', $subpage);
})->middleware('language');

Route::get('language/{lang}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'language'])->name('dashboard');

Route::get('/edit', [editWebsiteController::class, 'index'])->middleware(['auth', 'verified', 'language'])->name('edit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('language');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('language');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('language');
});

Route::resource('planets', PlanetController::class)->middleware('auth', 'language');

Route::resource('crews', CrewController::class)->middleware('auth', 'language');

require __DIR__.'/auth.php';
