<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\StagesController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\AdditionalController;
use App\Http\Controllers\TeamController;

Route::get('/', function () {
    return view('site.general');
});

Route::get('/cards/{id?}',[TextController::class,'index']);

Route::post('/cards/save',[TextController::class, 'save']);

Route::get('/allcards',[CardsController::class, 'index']);

Route::delete('/cards/{delete}',[CardsController::class, 'delete']);

Route::post('/cards/edit',[CardsController::class,'update']);

Route::get('/stages/{id?}' ,[StagesController::class,'index']);

Route::post('/stages/save',[StagesController::class, 'create']);

Route::get('/allstages' ,[StagesController::class,'show']);

Route::post('/stages/edit', [StagesController::class, 'update']);

Route::delete('/stages/{delete}',[StagesController::class, 'delete']);

Route::get('/selection/{id?}',[SelectionController::class,'index']);

Route::post('/selection/save',[SelectionController::class, 'create']);

Route::get('/allselection' ,[SelectionController::class,'show']);

Route::delete('/selection/{delete}',[SelectionController::class, 'delete']);

Route::post('/selection/edit',[SelectionController::class,'update']);

Route::get('/additional' ,[AdditionalController::class,'index']);

Route::post('/additional',[AdditionalController::class, 'create'])->name('additional');

Route::get('/team/{id?}' ,[TeamController::class,'index']);

Route::post('/team/save',[TeamController::class, 'create']);

Route::get('/allteam' ,[TeamController::class,'show']);

Route::delete('/team/{delete}',[TeamController::class, 'delete']);

Route::post('/team/edit',[TeamController::class,'update']);
