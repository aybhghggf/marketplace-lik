<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ObjectController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'ShowHome'])->name('home');
Route::get('/categories', [CategorieController::class, 'ShowCategorys'])->name('categories');
Route::get('/how-it-works', [IndexController::class, 'HowItWorks'])->name('how_it_works');
Route::get('/about', [IndexController::class, 'ShowAbout'])->name('about');
Route::get('/new-announcement', [IndexController::class, 'ShowNewAnnouncement'])->name('new_announcement');
Route::get('/politique-confidentialite', [IndexController::class, 'PolitiqueConfidentialite'])->name('politique_confidentialite');
Route::get('/conditions', [IndexController::class, 'ShowConditions'])->name('conditions');







Route::get('/categorie/{id}', [CategorieController::class, 'ShowCategory'])->name('categorie.show');

// User routes
Route::get('/profile', [UserController::class, 'ShowProfile'])->name('profile');
Route::get('/login', [UserController::class, 'ShowLogin'])->name('login');
Route::get('/register', [UserController::class, 'ShowRegister'])->name('register');
Route::post('/register/store', [UserController::class, 'StoreUser'])->name('register.store');
Route::post('/login', [UserController::class, 'Login'])->name('login.store');
Route::post('/logout', [UserController::class, 'Logout'])->name('logout');

// Object routes
Route::post('/object/store', [ObjectController::class, 'StoreObject'])->name('object.store');
Route::get('/object', [CategorieController::class, 'ShowCategory'])->name('object.show');
