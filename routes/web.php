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

//route blog
Route::get('/blog','BlogController@home');
Route::get('/blog/tentang','BlogController@tentang');
Route::get('/blog/kontak','BlogController@kontak');

//route CRUD
Route::get('/blog/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');

//validtion
Route::get('/input','ValidateController@input');
Route::post('/proses','ValidateController@proses');

//Eloquent
Route::get('/employee','EmployeeController@index');
Route::get('/employee/tambah','EmployeeController@tambah');
Route::post('/employee/store','EmployeeController@store');
Route::get('/employee/edit/{id}','EmployeeController@edit');
Route::put('/employee/update/{id}','EmployeeController@update');
Route::get('/employee/hapus/{id}','EmployeeController@hapus');
Route::get('/employee/cari','EmployeeController@cari');
