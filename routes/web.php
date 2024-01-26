<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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
Route::get('/', [ListingController::class, 'index']);

// Form to create new list
Route::get('/listing/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing data
Route::post('/listing', [ListingController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listing/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listing/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Show User Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Shhow form to edit listing
// update - Update listing
// destrop - Delete listing
