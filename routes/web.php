<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
});

Route::get('/login', function () {
    return view('common.login');
});
Route::post('/login', [UserController::class, 'verify']);

Route::get('/register', function () {
    return view('common.register');
});
Route::post('/register', [UserController::class, 'register']);

//===============Admin=============//
Route::get('/admin/index', function () {
    return view('admin.index');
});

Route::get('/admin/ambulance', function () {
    return view('admin.ambulance');
});
