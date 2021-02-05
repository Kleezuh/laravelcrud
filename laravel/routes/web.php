<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LogonController;


Route::resource('/books', BookController::class);
Route::resource('/login', LogonController::class);