<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

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

// All listing
Route::get('/', [ListingController::class,'index']);

// Form to create new list
Route::get('/listing/create', [ListingController::class, 'create']);

// Store listing data
// Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listing/{listing}', [ListingController::class, 'update']);

// Single listing
Route::get('/listing/{listing}', [ListingController::class,'show']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Shhow form to edit listing
// update - Update listing
// destrop - Delete listing
