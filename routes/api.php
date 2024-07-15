<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::prefix('/user')->group(function () {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});

// Authenticated routes
Route::middleware('auth:sanctum')->group(function () {

    // User route
    Route::get('/user/logout', [UserController::class, 'logout']);
    Route::get('/user', [UserController::class, 'show']);

    // Categories routes
    Route::prefix('/category')->group(function (){
        Route::post('/', [CategoryController::class, 'store']);
        Route::get('/', [CategoryController::class, 'index']);
        Route::get('/{category_id}', [CategoryController::class, 'show']);
        Route::delete('delete/{category_id}', [CategoryController::class, 'destroy']);
    });

    // Subcategories routes
    Route::prefix('/subcategory')->group(function (){
        Route::post('/', [SubCategoryController::class, 'store']);
        Route::get('/', [SubCategoryController::class, 'index']);
        Route::get('/{subcategory_id}', [SubcategoryController::class, 'show']);
        Route::delete('delete/{subcategory_id}', [SubcategoryController::class, 'destroy']);
    });

});
