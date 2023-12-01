<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;


Route::get('/', function () {
    return view('site.general');
});

Route::get('/cards',[TextController::class,'index']);

Route::post('cards/insert',[TextController::class,'insert'])->name('admin.insert');

Route::post('/cards',[TextController::class, 'save']);

Route::get('/allcards',[CardsController::class, 'index']);
