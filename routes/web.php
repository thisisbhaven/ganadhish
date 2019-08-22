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

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('bappa', 'BappaController@index');
Route::get('bappa/register', 'BappaController@create');
Route::post('bappa/register', 'BappaController@store');
Route::get('bappa/{bappa}/show', 'BappaController@show');

Route::get('vote', 'VoteController@index');
Route::get('vote/register', 'VoteController@create');
Route::post('vote/check', 'VoteController@check');
Route::post('vote/{bappa}/register', 'VoteController@store');
Route::get('vote/invalid', 'VoteController@invalid');

Route::get('admin', 'AdminController@index');
Route::get('admin/bappa/{bappa}/show', 'AdminController@show');
Route::post('admin/bappa/{bappa}/upload', 'AdminController@upload');
Route::get('admin/bappa/{bappa}/edit', 'AdminController@edit');
Route::post('admin/bappa/{bappa}/edit', 'AdminController@update');
Route::get('admin/bappa/{bappa}/approve', 'AdminController@approve');
Route::get('admin/bappa/{bappa}/decline', 'AdminController@decline');

Route::get('/privacy', 'HomeController@privacy');
