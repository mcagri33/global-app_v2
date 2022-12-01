<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Castle\CastleController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Castle\CastleUserController;
use App\Http\Controllers\Castle\CastleLanguageController;
use App\Http\Controllers\Castle\CastleBlogCategoryController;
use App\Http\Controllers\Castle\CastleBlogPostController;
use App\Http\Controllers\Site\SiteLanguageController;
use App\Http\Controllers\Site\SiteBlogController;
use App\Http\Controllers\Castle\CastleSettingController;

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


Route::group(['prefix' => 'castle', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', [CastleController::class, 'dashboard'])
        ->name('castle.dashboard');
});

Route::group(['prefix' => 'castle/user', 'middleware' => 'auth'], function () {
    Route::get('/', [CastleUserController::class, 'index'])
        ->name('castle.user.index');
    Route::post('/store', [CastleUserController::class, 'store'])
        ->name('castle.user.store');
    Route::get('/edit/{id}', [CastleUserController::class, 'edit'])
        ->name('castle.user.edit');
    Route::post('/update', [CastleUserController::class, 'update'])
        ->name('castle.user.update');
    Route::get('/delete/{id}', [CastleUserController::class, 'destroy'])
        ->name('castle.user.delete');
});

Route::group(['prefix' => 'castle/bcategory', 'middleware' => 'auth'], function () {
    Route::get('/', [CastleBlogCategoryController::class, 'index'])
        ->name('castle.bcategory.index');
    Route::post('/store', [CastleBlogCategoryController::class, 'store'])
        ->name('castle.bcategory.store');
    Route::get('/edit/{id}', [CastleBlogCategoryController::class, 'edit'])
        ->name('castle.bcategory.edit');
    Route::post('/update', [CastleBlogCategoryController::class, 'update'])
        ->name('castle.bcategory.update');
    Route::get('/delete/{id}', [CastleBlogCategoryController::class, 'destroy'])
        ->name('castle.bcategory.delete');
});

Route::group(['prefix' => 'castle/bpost', 'middleware' => 'auth'], function () {
    Route::get('/', [CastleBlogPostController::class, 'index'])
        ->name('castle.bpost.index');
    Route::post('/store', [CastleBlogPostController::class, 'store'])
        ->name('castle.bpost.store');
    Route::get('/edit/{id}', [CastleBlogPostController::class, 'edit'])
        ->name('castle.bpost.edit');
    Route::post('/update', [CastleBlogPostController::class, 'update'])
        ->name('castle.bpost.update');
    Route::get('/delete/{id}', [CastleBlogPostController::class, 'destroy'])
        ->name('castle.bpost.delete');
});

Route::group(['prefix' => 'castle/language', 'middleware' => 'auth'], function () {
    Route::get('/', [CastleLanguageController::class, 'index'])
        ->name('castle.language.index');
    Route::get('/add', [CastleLanguageController::class, 'create'])
        ->name('castle.language.add');
    Route::post('/store', [CastleLanguageController::class, 'store'])
        ->name('castle.language.store');
    Route::get('/edit/{id}', [CastleLanguageController::class, 'edit'])
        ->name('castle.language.edit');
    Route::post('/update', [CastleLanguageController::class, 'update'])
        ->name('castle.language.update');
    Route::get('/delete/{id}', [CastleLanguageController::class, 'destroy'])
        ->name('castle.language.delete');
    Route::get('/translation/{id}', [CastleLanguageController::class, 'translation'])
        ->name('castle.translation.index');
    Route::post('/translation/update/{id}', [CastleLanguageController::class, 'translation_update'])
        ->name('castle.translation.update');
});

Route::group(['prefix' => 'castle/settings', 'middleware' => 'auth'], function () {
    Route::get('/info/', [CastleSettingController::class, 'info'])
        ->name('castle.setting.info');
    Route::post('/info/update', [CastleSettingController::class, 'infoUpdate'])
        ->name('castle.info.update');
});

Route::group(['prefix' => 'castle/settings', 'middleware' => 'auth'], function () {
    Route::get('/social/', [CastleSettingController::class, 'social'])
        ->name('castle.setting.social');
    Route::post('/social/update', [CastleSettingController::class, 'socialUpdate'])
        ->name('castle.social.update');
});

Route::group(['prefix' => 'castle/settings', 'middleware' => 'auth'], function () {
    Route::get('/smtp/', [CastleSettingController::class, 'smtp'])
        ->name('castle.setting.smtp');
    Route::post('/smtp/update', [CastleSettingController::class, 'smtpUpdate'])
        ->name('castle.smtp.update');
});

Route::get('/', [SiteController::class, 'index'])
    ->name('site.index');
Route::post('/language', [SiteLanguageController::class, 'swich_language'])
    ->name('front_language');
Route::get('/news', [SiteBlogController::class, 'index'])
    ->name('site.new.index');
Route::get('/{slug_post}', [SiteBlogController::class, 'details'])
    ->name('site.new.detail');
Route::get('/news/load-more-data', 'SiteBlogController@more_data');
Route::get('/news//getPosts', [SiteBlogController::class, 'getPosts'])->name('getPosts');

require __DIR__ . '/auth.php';
