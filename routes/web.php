<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;

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
 

Auth::routes();


Route::post('/follow/{user}', 'FollowsController@store');

Route::get('/', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store')->name('post.store');
Route::get('/p/{post}', 'PostsController@show');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/m', 'MarkController@index');

Route::get('/h', 'HomeworkController@index');
Route::get('/h/create', 'HomeworkController@create');
Route::get('/h/{homework}', 'HomeworkController@show');
Route::post('/h/store', 'HomeworkController@store');

Route::get('/me/update', 'UserUpdateController@edit');
Route::patch('/me/{user}', 'UserUpdateController@update');

Route::get('/elonmusk', 'ElonMuskController@index');

Route::get('/poll/{code}', 'PollController@index');
Route::post('poll/insert/{code}', 'PollController@insert')->name("poll.insert");
/*
Route::get('dynamic-field', 'DynamicFieldController@index');
Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
*/

