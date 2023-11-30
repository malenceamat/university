<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\TextController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('site.general');
});



/*Route::resource('admin', CardsController::class);*/
Route::get('admin',[TextController::class,'index']);

Route::post('admin/insert',[TextController::class,'insert'])->name('admin.insert');

Route::post('/admin',[TextController::class, 'save']);
