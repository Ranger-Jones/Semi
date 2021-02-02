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
Route::get('/m/create', 'MarkController@create');
Route::post('m/insert', 'MarkController@insert')->name("mark.insert");
Route::patch('/m/update/{mark_id}', 'MarkController@edit');
Route::post('/m/find/', 'MarkController@find');
Route::get('/m/show/{search}', 'MarkController@show');

Route::get('/h', 'HomeworkController@index');
Route::get('/h/create', 'HomeworkController@create');
Route::get('/h/{homework}', 'HomeworkController@show');
Route::post('/h/store', 'HomeworkController@store');

Route::post('/h/check', 'HomeworkCheckController@store');

Route::get('/me/update', 'UserUpdateController@edit');
Route::patch('/me/{user}', 'UserUpdateController@update');

Route::get('/elonmusk', 'ElonMuskController@index');

Route::get('/poll/{code}', 'PollController@index');
Route::post('poll/insert/{code}', 'PollController@insert')->name("poll.insert");
Route::post('/poll/vote/{postid}', 'VotePollController@store');

Route::get('/schulleben', 'SchoollifeController@index');

Route::get('/schulnews', 'SchoolnewsController@index');

Route::get('/schulnews', 'SchoolnewsController@index');
Route::get('/schulnews/create', 'SchoolnewsController@create');
Route::get('/schulnews/{newsid}', 'SchoolnewsController@show');

Route::get('/notification/uncheck/{notification_id}', 'NotififactionsController@update');
Route::post('/notification/uncheck/all', 'NotififactionsController@updateAll');
Route::get('/notification/log', 'NotififactionsController@index');

Route::get('/startpage', 'StartpageController@index');

//---Admin Sector---//
Route::get('/a', 'AdminController@index');

Route::get('/a/permissions', 'PermissionController@index');
Route::get('/a/permissions/create', 'PermissionController@create');
Route::post('/a/permissions/show', 'PermissionController@show');
Route::post('/a/permissions/store', 'PermissionController@store');
Route::post('/a/permissions/update/{userid}/{permissionid}', 'PermissionController@update');

Route::get('/a/subjects', 'SubjectsController@index');
Route::get('/a/subjects/create', 'SubjectsController@create');
Route::get('/a/subjects/show', 'SubjectsController@show');
Route::post('/a/subjects/store', 'SubjectsController@store');
Route::get('/a/subjects/{subject_id}/destroy', 'SubjectsController@destroy');

Route::get('/a/grades', 'GradeController@index');
Route::get('/a/grades/create', 'GradeController@create');
Route::get('/a/grades/{grade_id}', 'GradeController@show');
Route::get('/a/grades/{grade_id}/edit', 'GradeController@edit');
Route::post('/a/grades/store', 'GradeController@store');
Route::get('/a/grades/{grade_id}/delete', 'GradeController@delete');
Route::post('/a/grades/{grade_id}/update', 'GradeController@update');


