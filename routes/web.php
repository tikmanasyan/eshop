<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'guest'])->group(function() {
    Route::get("/", [AuthController::class, "index"])->name("login-page");
    Route::get("/register", [AuthController::class, "register_view"])->name("register-page");
    Route::post("/login", [AuthController::class, "login"])->name("login-store");
    Route::post("/register", [AuthController::class, "register"])->name("register-store");
});
