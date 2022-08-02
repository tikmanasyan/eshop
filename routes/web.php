<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'guest'])->group(function() {
    Route::get("/", [AuthController::class, "index"])->name("login-page");
    Route::get("/register", [AuthController::class, "register_view"])->name("register-page");
    Route::get("/verify/{id}", [AuthController::class, "verify"])->name("verify");
    Route::post("/login", [AuthController::class, "login"])->name("login-store");
    Route::post("/register", [AuthController::class, "register"])->name("register-store");
});

Route::middleware(['auth'])->group(function() {
    Route::get("/home", [HomeController::class, "index"])->name("home-page");
    Route::get("/edit", function() {
        return view("auth.edit_profile");
    })->name("edit-profile");
    Route::get("/logout", [AuthController::class, "logout"])->name("logout");
});
