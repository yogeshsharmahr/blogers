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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// admin
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/post/','PostController@create')->name('add.post');
Route::post('/post/added/','PostController@store')->name('posts.store');
Route::get('all/Post/','PostController@index')->name('posts.index');
Route::get('add/Video','VideoController@create')->name('create.video');
Route::post('post/video','VideoController@store')->name('store.video');
Route::get('all/video','VideoController@index')->name('all.video');
//front
Route::get('blogs/','PostController@show')->name('show.post');
Route::get('blogs/{slug}','PostController@single_post')->name('single.post');
Route::post('post/comment','CommentController@store')->name('comments.store')->middleware('auth');


