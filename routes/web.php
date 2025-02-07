<?php

use App\Http\Controllers\Frontend\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/jobs', [JobController::class, 'index'])->name('vacancies');
Route::get('/job/{title}-{id}', [JobController::class, 'show'])->name('single_job');

Route::get('/career-advice', function () {
    return view('frontend.advice');
})->name('advice');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
