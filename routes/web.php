<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Service;
use App\Http\Controllers\Contact;
use App\Http\Controllers\Homepage;
use Illuminate\Support\Facades\Route;

Route::get('/', [Homepage::class, 'index'])->name('home');

Route::get('/contact', [Contact::class, 'index'])->name('contact');
Route::get('/about', [AboutPage::class, 'index'])->name('about');
Route::get('/service', [Service::class, 'index'])->name('service');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/show/{post:slug}', [PostController::class, 'show'])->name('show');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/career/{career:slug}', [CareerController::class, 'show'])->name('job');

// Job Application Routes
Route::get('/career/{career}/apply', [JobApplicationController::class, 'show'])->name('job-applications.show');
Route::post('/job-applications', [JobApplicationController::class, 'store'])->name('job-applications.store');

// Example: If you want to add a success page after submission
Route::get('/application-success', function () {
    return view('job-application.success');
})->name('job-applications.success');

