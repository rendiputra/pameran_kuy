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
Route::get('/', function () {
    return view('landing');
});
Route::get('/asd', function () {
    return view('user.tes1');
});


// pengunjung
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/galeri', 'HomeController@show_galeri')->name('galeri');
Route::get('/galeri/detail/{id}', 'HomeController@show_galeri_detail')->name('galeri_detail');


// Admin
Route::group(['middleware'=>'isSuperAdmin'],function(){
    Route::get('/karya/create', 'HomeController@create_karya')->name('create_karya');
    Route::post('/karya/create', 'HomeController@tambah_karya')->name('tambah_karya');
    Route::get('/karya/edit', 'HomeController@create_karya')->name('create_karya');
    
    
    
    // Seniman
    Route::group(['middleware'=>'isAdmin','middleware'=>'isAdmin'],function(){
            
        });
});
