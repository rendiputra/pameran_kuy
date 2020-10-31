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

Route::get('/', function () {
    return view('landing');
});
Route::get('/asd', function () {
    return view('user.tes1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/galeri', 'HomeController@galeri')->name('galeri');
Route::group(['middleware'=>'isSuperAdmin'],function(){
    Route::get('/karya/create', 'HomeController@create_karya')->name('create_karya');
    
    
    
    
    Route::group(['middleware'=>'isAdmin','middleware'=>'isAdmin'],function(){
            
        });
});
