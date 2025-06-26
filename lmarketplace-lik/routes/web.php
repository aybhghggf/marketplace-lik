<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'ShowHome'])->name('home');
Route::get('/categories', [CategorieController::class, 'ShowCategorys'])->name('categories');
Route::get('/how-it-works', [IndexController::class, 'HowItWorks'])->name('how_it_works');
Route::get('/about', [IndexController::class, 'ShowAbout'])->name('about');
Route::get('/new-announcement', [IndexController::class, 'ShowNewAnnouncement'])->name('new_announcement');
Route::get('/profile', [IndexController::class, 'ShowProfile'])->name('profile');

Route::get('/categorie/{id}', [CategorieController::class, 'ShowCategory'])->name('categorie.show');