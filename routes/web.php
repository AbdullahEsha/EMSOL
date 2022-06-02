<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ambulanceController;
use App\Http\Controllers\productController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\uploadProductController;
use App\Http\Controllers\blogUploadController;

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

// Route::get('/admin/ambulance', function () {
//     return view('admin.ambulance');
// });

// Route::get('/admin/blog', function () {
//     return view('admin.blog');
// });

// Route::get('/admin/product', function () {
//     return view('admin.product');
// });
Route::get('/admin/uploadProduct', function () {
        return view('admin.uploadProduct');
    });
Route::post('/admin/uploadProduct', [UploadProductController::class, 'getdata']);

Route::get('/admin/blogUpload', function () {
    return view('admin.blogUpload');
});
Route::post('/admin/blogUpload', [UploadProductController::class, 'getdata']);

Route::get('/admin/ambulance', [AmbulanceController::class, 'getData']);
Route::get('/admin/user', [UserController::class, 'getData']);
Route::get('/admin/product', [ProductController::class, 'getData']);
Route::get('/admin/blog', [BlogController::class, 'getData']);