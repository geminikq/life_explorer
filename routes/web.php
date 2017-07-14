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

//Route::get('/', function () {
//    return view('home');
//});

Route::post('/search', 'HomeController@search')->name('search');
Route::get('/mymsg', 'HomeController@mymsg')->middleware('auth')->name('mymsg');

// Search pages
Route::post('/search/sectorpage', 'HomeController@sectorpage')->name('sectorpage');
Route::get('/search/QandApage/{id}', 'HomeController@QandApage')->name('QandApage');
Route::get('/search/questionpage/{id}', 'HomeController@questionpage')->name('questionpage');

// MyPages
Route::get('/homepage', 'MyPageController@index')->name('homepage');
Route::post('/mypage/homepage', 'MyPageController@createnote')->name('createnote');

Route::get('/myfollow', 'MyPageController@myfollow')->name('myfollow');
Route::get('/myQA', 'MyPageController@myQA')->name('myQA');

Route::get('/mypage/shoppingnote/{id}', 'MyPageController@shoppingnote')->name('shoppingnote');

Auth::routes();

//Route::get('/', function() {
//	return view('welcome');
//});
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
