<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserContorller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use Illuminate\Http\Request;
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
// route to show the login form
Route::get('login', [LoginController::class, 'showLogin']);

// route to process the form
Route::post('login', [LoginController::class, 'doLogin']);

Route::get('/logout', function (Request $request) {
    $request->session()->invalidate();
    return redirect()->intended('login');
});

Route::get('/', [DashboardController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'show']);

Route::get('/users', [UserContorller::class, 'getData']);

Route::get('/products', [ProductController::class, 'getData']);

Route::get("/inventory", [InventoryController::class, 'show']);

Route::get("/orders", function(){
    return dd(DB::table('orders')->get());
});