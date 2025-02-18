<?php

use App\Http\Controllers\Frontend\VacanciesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
})->name('home');

Route::get('/jobs', [VacanciesController::class, 'index'])->name('vacancies');

Route::get('/job/{title}-{id}', [VacanciesController::class, 'show'])->name('single_job');

Route::get('/career-advice', function () {
    return view('frontend.advice');
})->name('advice');

Route::get('/career-advice/{slug}', function () {
    return view('frontend.single_blog');
})->name('single_blog');

Route::get('/faq', function () {
    return view('frontend.faq');
})->name('faq');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');

Route::get('/employee-registration', function () {
    return view('frontend.employee_registration');
})->name('employee_registration');

Route::get('/employer-registration', function () {
    return view('frontend.employer_registration');
})->name('employer_registration');

Route::get('/employee-login', function () {
    return view('frontend.employee_login');
})->name('employee_login');

Route::get('/employer-login', function () {
    return view('frontend.employer_login');
})->name('employer_login');

Route::get('/forgot-password', function () {
    return view('frontend.forget_password');
})->name('forget_password');

Route::get('/reset-password', function () {
    return view('frontend.reset_password');
})->name('reset_password');

Route::get('/job-categories', function () {
    return view('frontend.categories');
})->name('categories');

Route::get('/companies', function () {
    return view('frontend.companies');
})->name('companies');

Route::get('/company/{company}', function () {
    return view('frontend.company_profile');
})->name('single_company');

Route::get('/terms-and-conditions', function () {
    return view('frontend.terms');
})->name('terms');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy');
})->name('privacy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';
