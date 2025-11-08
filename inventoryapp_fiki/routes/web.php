<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;

Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/register', [FormController::class, 'register']);

Route::post('/welcome', [FormController::class, 'welcome']);

//CRUD

// create data
Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);

// read data
Route::get('/category', [CategoriesController::class, 'index']);
Route::get('/category/{id}', [CategoriesController::class, 'show']);

// update data
Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}', [CategoriesController::class, 'update']);

// delete data
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);


// CRUD Products
Route::resource('/product', ProductController::class);