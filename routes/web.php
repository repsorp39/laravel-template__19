<?php

use App\Http\Controllers\FileUploaderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

# CRUD routes
Route::get('/',[UserController::class,"index"]);

Route::get('/users-form',[UserController::class,"createForm"]);

Route::post('/users', [UserController::class, "create"]);

Route::put('/users', [UserController::class, "edit"]);

Route::get('/users/delete/{id}', [UserController::class, "delete"]);

Route::get('/users/{id}', [UserController::class, "editForm"]);


# file upload Test
Route::get("file-upload", fn () => view("tests.file"));
Route::post("file", [FileUploaderController::class,"upload"]);

# user auth tests
Route::get('/login', fn () => view("auth.login"))->name("login");
Route::post('/login', [LoginController::class, "index"]);

Route::middleware(Authenticate::class)->group(function(){
    Route::get("/home", fn () => view("home"));
});

Route::get("/logout", fn () => Auth::logout());
Route::get('/register', fn () => view("auth.register"))->name("register");