<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/products', function () {
    return view('products');
});


// Route::get('/cart', function () {
//     return view('cart');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

Route::get('/addnew', function () {
    return view('create');
});

Route::get('/view', function () {
    return view('view');
});

// Route::get('/update', function () {
//     return view('update');
// });

Route::get('products', [productcontroller::class, 'showProduct']);
Route::get('/cart', [productcontroller::class, 'cartProduct']);
Route::get('/dashboard', [productcontroller::class, 'dashboardProduct'])->name('dashboard');
Route::get('/view/{id}', [productcontroller::class, 'singleProduct']);
Route::post('/add', [productcontroller::class, 'addProduct'])->name('add');
Route::get('/delete/{id}', [productcontroller::class, 'deleteProduct'])->name('delete');
Route::post('/update/{id}', [productcontroller::class, 'updateProduct']);
Route::get('/updat/{id}', [productcontroller::class, 'update']);
