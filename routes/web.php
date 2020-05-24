<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/home', 'AdminController@index');
Route::get('/admin/post/create', 'PostController@createPost')->name('createPost');
Route::post('/admin/post/add', 'PostController@addPost')->name('addPost');
Route::get('/post/{id}', 'PostController@showPost')->name('showPost');
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('adminIndex');


Route::get('/admin/player/create', 'PlayerController@createPlayer')->name('createPlayer');
Route::post('/admin/player/add', 'PlayerController@addPlayer')->name('addPlayer');
Route::get('/player/{id}', 'PlayerController@showPlayer')->name('showPlayer');



Route::get('/admin/team/create', 'TeamController@createTeam')->name('createTeam');
Route::post('/admin/team/add', 'TeamController@addTeam')->name('addTeam');


Route::get('/list/player', 'PlayerController@getPlayerList')->name('listPlayer');
Route::get('admin/player/all', 'PlayerController@showAllPlayer')->name('showAllPlayer');
Route::get('admin/player/showUpdate/{id}', 'PlayerController@showUpdatePlayer')->name('showUpdatePlayer');
Route::post('admin/player/update/', 'PlayerController@updatePlayer')->name('updatePlayer');
Route::get('admin/team/all', 'TeamController@showAllTeam')->name('showAllTeam');
Route::get('admin/team/showUpdate/{id}', 'TeamController@showUpdateTeam')->name('showUpdateTeam');
Route::post('admin/team/update/', 'TeamController@updateTeam')->name('updateTeam');