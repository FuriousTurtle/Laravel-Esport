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

Route::get('/', 'HomeController@oof')->name('accueil');

Route::get('/schedule', 'HomeController@schedule')->name('schedule');
Route::get('/team/{id}', 'HomeController@team')->name('team');
Route::get('/teams', 'HomeController@teams')->name('teams');
Route::get('/media', 'HomeController@media')->name('media');
Route::get('/player/{id}', 'HomeController@player')->name('player');
Auth::routes();