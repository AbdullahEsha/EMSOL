<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\ambulanceController;
use App\Http\Controllers\productController;
use App\Http\Controllers\supportController;
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

Route::get('/', [ProductController::class, 'getHome']);
Route::get('/product', [ProductController::class, 'getProductHome']);

// Route::get('/product', function () {
//     return view('product');
// });
Route::get('/product-list', function () {
    return view('productList');
});
Route::get('/product/{id}', function () {
    return view('productDetails');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
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

Route::get('/admin/blog', [BlogController::class, 'getData']);
Route::post('/admin/blogUpload', [BlogController::class, 'store']);

Route::get('/admin/blog-upload', function () {
    return view('admin.blogUpload');
});
Route::post('/admin/blog-upload', [BlogController::class, 'blogUpload']);

Route::get('/admin/support', [SupportController::class, 'getSupportData']);

Route::get('/admin/profile', function () {
    return view('admin.profile');
});

Route::get('/admin/deleteBlog/{id}', [
    BlogController::class,
    'getDeleteDataById',
]);

Route::post('/admin/deleteBlog/{id}', [BlogController::class, 'deleteBlog']);
Route::get('/admin/editBlog/{id}', [BlogController::class, 'getDataById']);
Route::post('/admin/editBlog/{id}', [BlogController::class, 'updateBlog']);

Route::get('/admin/user', [UserController::class, 'getUser']);
Route::get('/admin/product-review', [
    ProductController::class,
    'getProductReviewData',
]);
Route::get('/admin/product-review/{id}', [
    ProductController::class,
    'getProductStatusData',
]);
Route::post('/admin/product-review/{id}', [
    ProductController::class,
    'updateProductStatus',
]);

//===============Vendor==============//
Route::get('/vendor/index', function () {
    return view('vendor.index');
});
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
Route::get('/vendor/support', function () {
    return view('vendor.support');
});
//===============User==============//
Route::get('/user/cart', function () {
    return view('user.cart');
});
Route::get('/user/wishlist', function () {
    return view('user.wishList');
});
Route::get('/user/profile', function () {
    return view('user.profile');
});
