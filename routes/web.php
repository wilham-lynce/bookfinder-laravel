<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAccountController;

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


// main page
// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/','books' );


// login routes
Route::view('login','login');
Route::get('login', function () {
    return view('login');
});
Route::post('login',[AdminAccountController::class,'login']);


// admin routes
Route::view('admin','admin');
