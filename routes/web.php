<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;



// All listings  
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing to mysql
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Show & Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete form
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Show Registration Form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Registrate Form
Route::post('/users', [UserController::class, 'store']);

// Logout Form
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login to website
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// show manage form
Route::get('/listings/manage', [ListingController::class, 'showManagedListings'])->middleware('auth');

// Single listing And make this at the end if u don't want errors
Route::get('/listings/{listing}', [ListingController::class, 'show']);
