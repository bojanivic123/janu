<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get("/", [TeamController::class, "index"]);
Route::get("/teams/{id}", [TeamController::class, "show"])->middleware("auth");
Route::get("/players/{id}", [PlayerController::class, "show"])->middleware("auth");
Route::get("/register", [AuthController::class, "showRegisterPage"])->middleware("notAuth");
Route::post("/register", [AuthController::class, "register"])->middleware("notAuth");
Route::get("/login", [AuthController::class, "showLoginPage"])->middleware("notAuth");
Route::post("/login", [AuthController::class, "login"])->middleware("notAuth");
Route::get("/logout", [AuthController::class, "logout"])->middleware("auth");


