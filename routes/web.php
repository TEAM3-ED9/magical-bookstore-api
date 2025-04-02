<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiInfoController;

Route::get('/', [ApiInfoController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
