<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    $name = "Bojan";
    $age = 26;
    return view("welcome", compact("name", "age"));
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/cars", [CarsController::class, "index"]);
Route::get("/cars/{id}", [CarsController::class, "show"]);
