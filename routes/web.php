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
Route::group(['middleware' => 'auth'], function () {

Route::get('/home', function () {
    return view('home');
});

//BEREES
  Route::get('Group','GroupController@group');
  Route::post('insert','groupController@insert_group');
  Route::post('/group/edit','groupController@edit_group');
  Route::post('/group/delete','groupController@delete_group');
  Route::post('/group/search','groupController@filter_group');

  Route::get('blacklist','blacklistController@index');
  Route::post('/black/edit','blacklistController@edit_blacklist');
  Route::post('/black/delete','blacklistController@delete_black');


 

  
  Route::get('role','roleController@showElement');

  Route::get('registrasi','registrasiController@showRoleRegistrasi');
  Route::post('/registrasi/input','registrasiController@input_registrasi');

  Route::get('verifikasi','verifikasiController@showRoleRegistrasi');

  Route::get('Whitelist','WhitelistController@showw');

  Route::get('monitoring','monitoringController@monitor');

  Route::get('inisiasi','inisiasiController@inisiation');
  Route::post('/inisiasi/edit','inisiasiController@edit_inisiasi');


  Route::get('planning','planningController@showElement');

  Route::get('executing','executingController@Element');

  Route::get('closing','closingController@close');
  Route::get('/closing/input','closingController@inputclosing');
  Route::post('/closing/edit','closingController@edit_closing');
  Route::post('/closing/delete','closingController@delete_closing');
  Route::post('/closing/search','closingController@filter_closing');

  Route::get('upload','uploadController@showElement');

  Route::get('Aproval','AprovalController@showElement');

  //BERRES
  Route::get('categori','categoriController@showElement');
  Route::post('/category/input','categoriController@input_category');
  Route::post('/category/edit','categoriController@edit_category');
  Route::post('/category/delete','categoriController@delete_category');


 



  });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
