<?php

use App\Models\book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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
Route::view('/','landing' );
Route::view('books','landing' );
Route::get('books', [BookController::class,'index']);
Route::get('/', [BookController::class, 'nav']);

Route::get('books/{volumeInfocategories0}',[BookController::class, 'section']);






// logout route
Route::get('logout', function () {
    Session::forget('username');
    return redirect('login');
});





// login routes
Route::view('login','login');
Route::get('login', function () {
    return view('login');
});
Route::post('login',[AdminAccountController::class,'login']);
Route::get('admin',[BookController::class,'catcount']);



// admin routes
Route::view('admin','admin');
// Route::get('admin/{username}', [AdminAccountController:: class.'info']);
// Route::get('admin',[BookController::class,'count']);
Route::view('addbook','addbook');
Route::get('addbook', [BookController::class,'create']);
Route::post('rough', [BookController::class,'store']);
Route::get('adminsearch', [BookController::class,'search']);
// Route::get('admin',[BookController::class,'catcount']);
Route::get('admin',[BookController::class,'tcount']);

