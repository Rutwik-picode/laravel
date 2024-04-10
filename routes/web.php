<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    return view('Home');
});
//user login routes
Route::get('/sign-in', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'show']);

//user registration routes
Route::get('/sign-up', [AuthController::class, 'create']);
Route::post('/register', [AuthController::class, 'store']);


Route::get('/add-user', [AdminController::class, 'create']);
Route::post('/create', [AdminController::class, 'store']);

Route::get('/Admin', [AdminController::class, 'index']);

Route::get('/delete-user', [AdminController::class, 'delete']);
