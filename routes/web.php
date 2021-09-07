<?php

use Illuminate\Support\Facades\Route;

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

Route::get('currency','App\Http\Controllers\CurrencyController@index');
Route::post('currency','App\Http\Controllers\CurrencyController@exchangeCurrency');
Route::get('/currency', [App\Http\Controllers\CurrencyController::class, 'index'])->name('currency');

Auth::routes();

return Redirect::to("/currency")->withSuccess('You have successfully logged in! :)');

