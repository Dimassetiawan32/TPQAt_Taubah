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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('index', 'KegiatanController@index')->name('backend.kegiatan.index');
    Route::get('create', 'KegiatanController@create')->name('backend.kegiatan.create');
});

Route::group(['prefix' => 'biodata'], function(){
    Route::get('index', 'BiodataController@index')->name('backend.biodata.index');
    Route::get('create', 'BiodataController@create')->name('backend.biodata.create');
    Route::post('save', 'BiodataController@store')->name('biodata.save');
    Route::get('formEdit/{biodata}','BiodataController@edit')->name('backend.biodata.formEdit');
    Route::patch('update/{biodata}','BiodataController@update')->name('backend.biodata.update');
    Route::get('show/{biodata}','BiodataController@show')->name('backend.biodata.show');
    Route::delete('delete/{biodata}', 'BiodataController@destroy')->name('backend.biodata.delete');
});

Route::get('create/sms','SmsController@create')->name('create.sms');
Route::post('kirim/sms','SmsController@store')->name('kirim.sms');

Route::get('create/email','EmailController@create')->name('create.email');
Route::get('kirim/email','EmailController@store')->name('kirim.email');


Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
});
