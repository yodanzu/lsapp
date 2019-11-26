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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h1>Hello World</h1>';
});

Route::get('/users/{id}/{name}', function($id, $name){
    return 'This is user '.$name.' with an id of '.$id;
});
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

/*Route::get('/courses', 'CoursesController@index');
Route::get('/courses/create', 'CoursesController@create');
Route::get('/courses/{id}', 'CoursesController@show');
Route::post('/courses', 'CoursesController@store');
Route::put('/posts/edit', 'CoursesController@update');
Route::delete('/courses/destroy', 'CoursesController@destroy');
    
Route::get('/posts', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::put('/posts/edit', 'PostsController@update');
Route::delete('/posts/{id}/destroy', 'PostsController@destroy');*/

Route::resource('courses', 'CoursesController');
Route::resource('posts', 'PostsController');
Route::resource('scheds', 'SchedsController');
Route::resource('files', 'FilesController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
