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

Route::get('kategori', function () {
    return "hello kategori";
});

Route::get('layout', function () {
	return view ('layouts.master');
});

Route::get('dashboard',function() {
	return view('layouts.dashboard');
});

Route::get('category',function() {
	return view('category.index');
});

Route::get('app',function() {
	return view('master.app');
});

Route::resource('tbktg','KategoriController');
	



Route::resource('kategori','KategoriController')->except(['delete','destroy']);