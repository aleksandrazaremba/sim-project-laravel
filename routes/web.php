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
Route::post('/save', ['uses' => 'SitesController@save','as' => 'sites.save']);

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

Route::get('/myprofile', [
    'uses' => 'SitesController@myprofile',
    'as' => 'myprofile'
]);

Route::get('/edit-profile', [
    'uses' => 'EditprofileController@editprofile',
    'as' => 'editprofile'
]);
Route::post('/edit-profile', [
    'uses' => 'EditprofileController@saveeditprofile',
    'as' => 'editprofile'
]);

Route::get('delete-records', 'UserDeleteController@index');
Route::get('delete/{id}', 'UserDeleteController@destroy');


Route::get('/fertility-edit/{user?}', [
    'uses' => 'FertilityController@edit',
    'as' => 'fertility.edit'
]);

Route::post('/fertility-edit', [
    'uses' => 'FertilityController@save',
    'as' => 'fertility.saveEdit'
]);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
