<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\CareerController;
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

