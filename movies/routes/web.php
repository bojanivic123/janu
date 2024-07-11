<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
use Illuminate\Support\Facades\Route;

Route::get("/movies", [MoviesController::class, "index"]);
Route::get("/movies/{id}", [MoviesController::class, "show"]);
Route::get("/add", [MoviesController::class, "showCreateMovie"]);
Route::post("/create", [MoviesController::class, "store"]);
Route::post("/createcomment", [CommentsController::class, "store"]);
Route::get("/genres/{genre}", [GenresController::class, "show"]);
