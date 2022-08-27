<?php

use App\Http\Controllers\Backend\AdminController;
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
        Route::get('admin/home/global-precences', 'global_precences')->name('home.global-precences');
        Route::post('admin/home/global-precences/update', 'global_precences_update')->name('home.global-precences.update');
        Route::post('admin/home/global-precences/country/asia/store', 'global_precences_asia_country_store')->name('home.global-precences.country.asia.store');
        Route::post('admin/home/global-precences/country/africa/store', 'global_precences_africa_country_store')->name('home.global-precences.country.africa.store');
        Route::get('admin/home/global-precences/country/africa/edit/{id}', 'global_precences_africa_country_edit')->name('home.global-precences.country.africa.edit');
        Route::post('admin/home/global-precences/country/africa/update', 'global_precences_africa_country_update')->name('home.global-precences.country.africa.update');
        Route::get('admin/home/global-precences/country/africa/delete/{id}', 'global_precences_africa_country_delete')->name('home.global-precences.country.africa.delete');
        Route::get('admin/home/global-precences/country/asia/edit/{id}', 'global_precences_asia_country_edit')->name('home.global-precences.country.asia.edit');
        Route::post('admin/home/global-precences/country/asia/update', 'global_precences_asia_country_update')->name('home.global-precences.country.asia.update');
        Route::get('admin/home/global-precences/county/asia/delete/{id}', 'global_precences_asia_country_delete')->name('home.global-precences.county.asia.delete');
        Route::get('admin/home/general-info', 'general_info_section')->name('home.general-info');
        Route::post('admin/home/general-info/update', 'general_info_update')->name('home.general-info.update');
        Route::get('admin/home/general-info/card/add', 'general_info_card_add')->name('home.general-info.card.add');
        Route::post('admin/home/general-info/card/store', 'general_info_card_store')->name('home.general-info.card.store');
        Route::get('admin/home/general-info/card/edit/{id}', 'general_info_card_edit')->name('home.general-info.card.edit');
        Route::post('admin/home/general-info/card/update', 'general_info_card_update')->name('home.general-info.card.update');
        Route::get('admin/home/general-info/card/delete/{id}', 'general_info_card_delete')->name('home.general-info.card.delete');
        Route::get('admin/home/home-contact', 'home_contact')->name('home.home-contact');
        Route::post('admin/home/home-contact/update', 'home_contact_update')->name('home.home-contact.update');
        Route::get('admin/home/why-choose-us', 'why_choose_us')->name('home.why-choose-us');
        Route::post('admin/home/why-choose-us/update', 'why_choose_us_update')->name('home.why-choose-us.update');
        Route::get('admin/home/why-choose-us/list/add', 'why_choose_us_list_add')->name('home.why-choose-us.list.add');
        Route::post('admin/home/why-choose-us/list/store', 'why_choose_us_list_store')->name('home.why-choose-us.list.store');
        Route::get('admin/home/why-choose-us/list/edit/{id}', 'why_choose_us_list_edit')->name('home.why-choose-us.list.edit');
        Route::post('admin/home/why-choose-us/lust/update', 'why_choose_us_list_update')->name('home.why-choose-us.lust.update');
        Route::get('admin/home/why-choose-us/list/delete/{id}', 'why_choose_us_list_delete')->name('home.why-choose-us.list.delete');
        Route::get('admin/home/home-video', 'video_section')->name('home.home-video');
        Route::post('admin/home/home-video/update', 'video_section_update')->name('home.home-video.update');
        Route::get('admin/about/about-header', 'about_header')->name('about.about-header');
        Route::post('admin/about/about-header/update', 'about_header_update')->name('about.about-header.update');
        Route::get('admin/about/quality-policy', 'quality_policy')->name('about.quality-policy');
        Route::post('admin/about/quality-policy/update', 'quality_policy_update')->name('about.quality-policy.update');
        Route::get('admin/about/quality-policy/item', 'quality_policy_item_add')->name('about.quality-policy.item');
        Route::post('admin/about/quality-policy/item/store', 'quality_policy_item_store')->name('about.quality-policy.item.store');
        Route::get('admin/about/quality-policy/item/edit/{id}', 'quality_policy_item_edit')->name('about.quality-policy.item.edit');
        Route::post('admin/about/quality-policy/item/update', 'quality_policy_item_update')->name('about.quality-policy.item.update');
        Route::get('admin/about/quality-policy/item/delete/{id}', 'quality_policy_item_delete')->name('about.quality-policy.item.delete');
        Route::get('admin/about/about-reliable', 'about_reliable')->name('about.about-reliable');
        Route::post('admin/about/about-reliable/update', 'about_reliable_update')->name('about.about-reliable.update');
        Route::get('admin/about/about-reliable/item', 'about_reliable_item')->name('about.about-reliable.item');
        Route::post('admin/about/about-reliable/item/store', 'about_reliable_item_store')->name('about.about-reliable.item.store');
        Route::get('admin/about/about-reliable/item/edit/{id}', 'about_reliable_item_edit')->name('about.about-reliable.item.edit');
        Route::post('admin/about/about-reliable/item/update', 'about_reliable_item_update')->name('about.about-reliable.item.update');
        Route::get('admin/about/about-reliable/item/delete/{id}', 'about_reliable_item_delete')->name('about.about-reliable.item.delete');
    });
    Route::controller(AdminController::class)->group(function () {
        Route::get('admin/logout', 'destroy')->name('admin.logout');
    });
});

Route::get('/dashboard', function () {
    return view('backend.main');
})->middleware([ 'auth' ])->name('dashboard');

require __DIR__ . '/auth.php';
