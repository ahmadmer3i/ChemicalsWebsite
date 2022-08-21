<?php

use App\Http\Controllers\Frontend\HomeController;
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
    return view('frontend.home');
})->name('home');
Route::get('contacts', [ HomeController::class,'contact'])->name('contacts');
Route::get('products', [HomeController::class, 'products'])->name('products');
Route::get('about', [HomeController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    return view('backend.body.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
