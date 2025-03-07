<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::middleware(['age'])->group(function () {
    Route::get('/',[\App\Http\Controllers\ContactController::class,"index"]);
    Route::post('/',[\App\Http\Controllers\ContactController::class,"store"])->name("form.submit");



    Route::post("/contact/storeform/save",[\App\Http\Controllers\ContactController::class,"store"])->name("contact.storeform")->middleware("age");

    Route::resource('contact',\App\Http\Controllers\MyContactBookController::class);
//});

