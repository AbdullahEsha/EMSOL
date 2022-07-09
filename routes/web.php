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
Route::get('/admin/blogUpload', function () {
    return view('admin.blogUpload');
});

Route::get('/admin/blog', [BlogController::class, 'getData']);
Route::post('/admin/blogUpload', [ProductController::class, 'store']);

Route::get('/admin/ambulance', [AmbulanceController::class, 'getData']);
Route::get('/admin/user', [UserController::class, 'getData']);
Route::get('/admin/product-review', [
    ProductController::class,
    'getProductReviewData',
]);

//===============Vendor==============//
Route::get('/vendor/uploadProduct', function () {
    return view('vendor.uploadProduct');
});
Route::post('/vendor/uploadProduct', [
    ProductController::class,
    'uploadProduct',
]);

Route::get('/vendor/product', [ProductController::class, 'getProduct']);
Route::post('/vendor/storeProduct', [ProductController::class, 'storeProduct']);

Route::get('/vendor/deleteProduct/{id}', [
    ProductController::class,
    'getDeleteDataById',
]);
Route::post('/vendor/deleteProduct/{id}', [
    ProductController::class,
    'deleteProduct',
]);
Route::get('/vendor/editProduct/{id}', [
    ProductController::class,
    'getDataById',
]);
Route::post('/vendor/editProduct/{id}', [
    ProductController::class,
    'updateProduct',
]);
