<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;



// All listings  
Route::get('/', [ListingController::class, 'index']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing to mysql
Route::post('/listings', [ListingController::class, 'store']);

// Show & Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete form
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

// Single listing And make this at the end if u don't want errors
Route::get('/listings/{listing}', [ListingController::class, 'show']);
