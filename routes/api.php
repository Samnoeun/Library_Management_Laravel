<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\LibrarianController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('libraries', LibraryController::class);
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('bookings', BookingController::class);
Route::resource('borrows', BorrowController::class);
Route::resource('librarians', LibrarianController::class);
Route::resource('logins', LoginController::class);
Route::resource('members', MemberController::class);





