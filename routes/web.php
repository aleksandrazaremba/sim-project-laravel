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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['uses' => 'SitesController@index','as' => 'sites']);

Route::get('/add', ['uses' => 'SitesController@add','as' => 'sites.add']);
Route::post('/save', [
    'uses' => 'SitesController@save',
    'as' => 'sites.save'
]);
Route::get('/site/{site}', [
    'uses' => 'SitesController@show',
    'as' => 'sites.show'
]);

Route::get('/listofusers', [
    'uses' => 'SitesController@listofusers',
    'as' => 'listofusers'
]);

Route::get('/user/{user}', [
    'uses' => 'SitesController@userprofile',
    'as' => 'sites.userprofile'
]);

// Route::get('/confirmeditprofile', ['uses' => 'UsersController@confirmeditprofile', 'as' => 'confirmeditprofile']);

Route::get('/myprofile', [
    'uses' => 'SitesController@myprofile',
    'as' => 'myprofile'
]);

Route::get('/editprofile', [
    'uses' => 'UsersController@editprofile',
    'as' => 'editprofile'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
