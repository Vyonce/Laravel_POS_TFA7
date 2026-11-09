<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/customers');
Route::resource('customers', CustomerController::class)->only(['index', 'create', 'store', 'edit', 'update']);
Route::resource('users', UserController::class)->only(['index', 'create', 'store', 'edit', 'update']);
