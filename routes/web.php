<?php

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


//--------------------ADMİN_MENU--------------------------------------
Route::get('/','SiteController@denemeMetod');
Route::get('/menu','SiteController@menulerMetodu')->name('menuEkle');
Route::get('/Admin/personel/menu','SiteController@menuListesi')->name('menuListe');
Route::get('/Admin/personel/duzenle/{id?}','SiteController@menuDuzenle')->name('menuDuzenle');
Route::get('/personel/sil/{id}', 'SiteController@menuSil')->name('menuSil');
Route::post('/personel/kaydet/{id?}','SiteController@menuKaydet')->name('menuKayit');

//-------------------------ADMİN_KATEGORİ-------------------------

Route::get('/admin','SiteController@kategoriMetod');
//Route::get('/kategoriler','SiteController@kategoriMethodu')->name('kategoriEkle');
Route::get('/Admin/kategori/liste','SiteController@kategoriListesi')->name('kategoriListe');
Route::get('/Admin/kategori/duzenle/{id?}','SiteController@kategoriDuzenle')->name('kategoriDuzenle');
Route::get('/kategori/sil/{id}', 'SiteController@kategoriSil')->name('kategoriSil');
Route::post('/kategori/kaydet/{id?}','SiteController@kategoriKaydet')->name('kategoriKayit');

//------------------------SİTE---------------------------------------------------------

Route::get('/site','MenuController@menuFilter')->name('menuFilter');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
