<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\Movie;

Route::get('/', [HomeController::class,"index"]);
Route::get('/about', [HomeController::class,"about"]);
Route::get('/contact', [HomeController::class,"contact"]);
Route::get('/blog', [HomeController::class,"blog"]);
Route::get('/alphaadminalphalogin', [AdminController::class,"adminlogin"])->middleware('guest');
Route::post('/sendmessage', [HomeController::class,"message"]);
Route::get('/alphaadminalphareg',[AdminController::class,"adminreg"])->middleware('guest');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/editmovie/{id}', [AdminController::class,"edit"])->name('editmovie');
    Route::post('/uploadmovie', [AdminController::class,"upload"]);
    Route::put('/update-data/{id}', [AdminController::class,"update"]);
    Route::post('/deletemovie', [AdminController::class,"delete"]);
    Route::get('/messages', [AdminController::class,"message"]);
    Route::get('/staff', [AdminController::class,"staff"]);
    Route::post('/addstaff', [AdminController::class,"addstaff"]);
    Route::post('/deletestaff', [AdminController::class,"deleteStaff"]);
    Route::get('/editstaff/{id}', [AdminController::class,"editstaff"])->name('editstaff');
    Route::put('/update-staff/{id}', [AdminController::class,"updatestaff"]);
    Route::get('/dashboard', function () {
        $data=movie::all();
        return view('admindashboard', compact('data'));
    })->name('dashboard');
});


