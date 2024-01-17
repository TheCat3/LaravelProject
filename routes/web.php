<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
Route::get('/login',[UserController::class,'login'])->middleware('LoggedInAlready');
Route::post('/reallogin',[UserController::class,'reallogin'])->name('reallogin');
Route::get('/signup',[UserController::class,'signup'])->middleware('LoggedInAlready');
Route::post('/signupnewuser',[UserController::class,'create'])->name('create');
Route::get('/dashboard',[UserController::class,'dashboard'])->middleware('LoggedIn');
Route::get('/logout',[UserController::class,'logout']);