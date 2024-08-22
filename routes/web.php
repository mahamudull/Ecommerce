<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmiController;
use App\Http\Controllers\HomeController;

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('redirect',[HomeController::class,'redirect']);
route::get('/view_catagory',[AdmiController::class,'view_catagory']);
route::post('/add_catagory',[AdmiController::class,'add_catagory']);
