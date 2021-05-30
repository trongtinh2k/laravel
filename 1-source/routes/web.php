<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\TrainerController;
use App\Http\Middleware\PerPage;


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
    return view('welcome');
});


Route::get('/companies', [CompanyController::class, 'getCompanies'])
    ->middleware('per_page');

Route::get('/trainers', [TrainerController::class, 'getTrainers'])
    ->middleware('trainer_logic');

Route::get('/searchCompanies',[SearchController::class,'search']);






Route::fallback(function () {
    return view('404');
})->name('NotFound');

Route::get('/error', function () {
    return view('error');
})->name('Error');

Route::get('/getCompanyType/{id}', [CategoryController::class,'getCompanies']);
Route::get('/page', [CategoryController::class,'getCompanies']);