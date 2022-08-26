<?php

use App\Http\Controllers\Backend\ContentController;
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
Route::get('contacts', [ HomeController::class, 'contact' ])->name('contacts');
Route::get('products', [ HomeController::class, 'products' ])->name('products');
Route::get('about', [ HomeController::class, 'about' ])->name('about');
Route::get('news', [ HomeController::class, 'news' ])->name('news');
Route::middleware('auth')->group(function () {
    Route::controller(ContentController::class)->group(function () {
        Route::get('admin/home/sliders', 'sliders')->name('home.sliders');
        Route::get('admin/home/sliders/add', 'sliders_add')->name('home.sliders.add');
        Route::post('admin/home/sliders/store', 'sliders_store')->name('home.sliders.store');
        Route::get('admin/home/sliders/edit/{id}', 'sliders_edit')->name('home.sliders.edit');
        Route::post('admin/home/sliders/update', 'sliders_update')->name('home.sliders.update');
        Route::get('admin/home/sliders/delete/{id}', 'sliders_delete')->name('home.sliders.delete');
    });
});

Route::get('/dashboard', function () {
    return view('backend.main');
})->middleware([ 'auth' ])->name('dashboard');

require __DIR__ . '/auth.php';
