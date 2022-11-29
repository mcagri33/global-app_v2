<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Castle\CastleController;
use App\Http\Controllers\Site\SiteController;
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

Route::middleware('guest')->group(function () {
    Route::get('castle/login',[CastleController::class,'index'])->name('login_form');
    Route::post('castle/login/owner',[CastleController::class,'login'])->name('castle.login');
    Route::get('/',[SiteController::class,'index'])
        ->name('app.index');
    Route::get('/project/{id}',[SiteController::class,'projectDetails'])
        ->name('project.details');
});

Route::group(['prefix' => 'castle'], function (){
    Route::get('/dashboard',[CastleController::class,'dashboard'])
        ->name('castle.dashboard');
    Route::get('/logout',[CastleController::class,'castleLogout'])
        ->name('castle.logout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
