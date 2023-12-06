<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;


Route::get('/', function () {
    return view('site.general');
});

Route::get('/cards/{id?}',[TextController::class,'index']);

Route::post('/cards/save',[TextController::class, 'save']);

Route::get('/allcards',[CardsController::class, 'index']);

Route::delete('/cards/{delete}',[CardsController::class, 'delete']);

Route::post('/cards/edit',[CardsController::class,'update']);
