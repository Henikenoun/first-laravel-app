<?php

use App\Http\Controllers\CategorieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/categories" , [CategorieController::class,"index"]);
Route::post("/categories" , [CategorieController::class,"store"]);
Route::get("/categories/{categorie}" , [CategorieController::class,"show"]);
Route::put("/categories/{categorie}" , [CategorieController::class,"update"]);
Route::delete("/categories/{categorie}" , [CategorieController::class,"destroy"]);
