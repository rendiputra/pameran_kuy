<?php

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
// Pameran KUI (Karya Untuk Indonesia)

// Guest
// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/', 'FrontController@index')->name('index');
Route::get('/tentang', 'FrontController@tentang_kami')->name('tentang_kami');

// pengunjung
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/galeri', 'HomeController@show_galeri')->name('galeri');
Route::get('/galeri/detail/{id}', 'HomeController@show_galeri_detail')->name('galeri_detail');
Route::post('/users/laporkan', 'HomeController@laporkan')->name('laporkan');
Route::post('/users/daftar_seniman', 'HomeController@daftar_seniman')->name('daftar_seniman');


// Admin
Route::group(['middleware'=>'isAdmin'],function(){
    Route::get('/karya/create', 'HomeController@create_karya')->name('create_karya');
    Route::post('/karya/create', 'HomeController@insert_karya')->name('insert_karya');
    Route::get('/karya/edit/{id}', 'HomeController@edit_karya_show')->name('edit_karya_show');
    Route::post('/karya/edit', 'HomeController@edit_karya')->name('edit_karya');
    Route::delete('/karya/hapus/{id}', 'HomeController@hapus_karya')->name('hapus_karya');
    
    
    // Seniman
    Route::group(['middleware'=>'isSuperAdmin'],function(){
            Route::get('/admin/list_antrian_karya', 'HomeController@list_antrian_karya')->name('list_antrian_karya');
            Route::get('/admin/list_antrian_karya/detail/{id}', 'HomeController@list_antrian_karya_detail')->name('list_antrian_karya_detail');
            Route::post('/admin/list_antrian_karya/detail/{id}', 'HomeController@list_antrian_detail_diterima')->name('list_antrian_detail_diterima');
            Route::delete('/admin/list_antrian_karya/detail/{id}', 'HomeController@list_antrian_detail_ditolak')->name('list_antrian_detail_ditolak');

            Route::get('/admin/list_post_diterima', 'HomeController@list_post_diterima')->name('list_post_diterima');
            Route::get('/admin/list_post_ditolak', 'HomeController@list_post_ditolak')->name('list_post_ditolak');
            
            // laporan post
            Route::get('/admin/list_laporan', 'HomeController@list_laporan')->name('list_laporan');
            Route::post('/admin/terima_laporan/{id}', 'HomeController@terima_laporan_act')->name('terima_laporan_act');
            Route::post('/admin/tolak_laporan/{id}', 'HomeController@tolak_laporan_act')->name('tolak_laporan_act');
            Route::get('/admin/list_laporan/history', 'HomeController@list_history_laporan')->name('list_history_history');

            
        });
});
