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
    return view('home');
})->middleware('auth');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/show','\App\Http\Controllers\EmployeerController@show')->middleware('auth');
Route::get('/create/show',function (){
    return view('create');
})->middleware('auth');
Route::post('/create','\App\Http\Controllers\EmployeerController@create')->middleware('auth')->name('create');
Route::get('/find/show',function (){
    return view('find');
})->middleware('auth')->name('find-show');
Route::post('/find','\App\Http\Controllers\EmployeerController@find')->middleware('auth')->name('find');

Route::get('/update/{id}','\App\Http\Controllers\EmployeerController@update')->middleware('auth')->name('update');
Route::post('/update/{id}','\App\Http\Controllers\EmployeerController@updateSubmit')->middleware('auth')->name('update');
Route::get('/delete/{id}','\App\Http\Controllers\EmployeerController@delete')->middleware('auth')->name('delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
