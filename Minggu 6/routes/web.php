<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\DonnyController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
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
//Route::get('hello', function () {
	//return 'Hello World';
//});
//Route::get('/belajar', function () {
    //echo '<h1>Hello World<h1>';
    //echo '<p>Sedang belajar Laravel</p>';
    //});
//Route::get('page/{nomor}', function ($nomor){
    //return 'Ini Halaman ke-' . $nomor;
//});    	
//Route::get('image', function () {
    //return view('ereren');
//});
//Route::get('user', 'HidayahController@index');

//Route::get('user', [DonnyController::class, 'index']);

//Route::resource('user', 'HidayahController');

//Route::resource('user', DonnyController::class);

//Route::get("/dell", function(){
	//return view("dell");
//});	

Route::resource('home', HomeController::class);

//Route::group(['namespace' => 'Backend'], function()
//{
Route::resource('dashboard', DashboardController::class);
//});