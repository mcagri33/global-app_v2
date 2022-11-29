<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Castle\CastleController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Castle\CastleUserController;
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


Route::group(['prefix' => 'castle', 'middleware' => 'auth'], function (){
    Route::get('/dashboard',[CastleController::class,'dashboard'])
        ->name('castle.dashboard');
});

Route::group(['prefix' => 'castle/user', 'middleware' => 'auth'], function (){
    Route::get('/',[CastleUserController::class,'index'])
        ->name('castle.user.index');
    Route::post('/store',[CastleUserController::class,'store'])
        ->name('castle.user.store');
    Route::get('/edit/{id}',[CastleUserController::class,'edit'])
        ->name('castle.user.edit');
    Route::post('/update',[CastleUserController::class,'update'])
        ->name('castle.user.update');
    Route::get('/delete/{id}',[CastleUserController::class,'destroy'])
        ->name('castle.user.delete');
});



Route::get('/',[SiteController::class,'index'])
    ->name('app.index');
require __DIR__.'/auth.php';
