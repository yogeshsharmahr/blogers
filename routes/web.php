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
Route::get('/admin', 'HomeController@admin')->name('admin')->middleware('admin');

Route::get('/add/post/','PostController@create')->name('add.post')->middleware('admin');
Route::post('/post/added/','PostController@store')->name('posts.store')->middleware('admin');
Route::get('all/Post/','PostController@index')->name('posts.index')->middleware('admin');
Route::get('add/Video','VideoController@create')->name('create.video')->middleware('admin');
Route::post('post/video','VideoController@store')->name('store.video')->middleware('admin');
Route::get('all/video','VideoController@index')->name('all.video')->middleware('admin');
Route::get('events/','VideoController@events_create')->name('events.admin')->middleware('admin');
Route::post('add/events','VideoController@store')->name('add_new.event')->middleware('admin');

//front
Route::get('blogs/','PostController@show')->name('show.post');
Route::get('blogs/{slug}','PostController@single_post')->name('single.post');
Route::post('post/comment','CommentController@store')->name('comments.store')->middleware('auth');
Route::get('show/events','UsersController@Events_show')->name('show.events');
Route::get('/event/join/{slug}','UsersController@joinuser')->name('event.join')->middleware('auth');
Route::get('user/','UsersController@users_login')->name('users');

