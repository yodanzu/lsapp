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



Route::auth(['register'=>false]);

Route::get('/', function(){
	return view('auth/login');
});


Route::group(['middleware' => ['auth']], function() {

	Route::get('/dashboard', 'Admin\DashboardController@dashboard')->name('dashboard');

	
	//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Course Function xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	Route::group(['prefix' => 'course'], function() {
	    Route::get('/list', 'CourseModelController@index')->name('view.course.index');
	    Route::get('/create', 'CourseModelController@create')->name('view.course.create');
	    Route::get('/edit/{id}', 'CourseModelController@edit')->name('view.course.edit');
	    Route::post('/store', 'CourseModelController@store')->name('course.store');
	    Route::put('/update/{id}', 'CourseModelController@update')->name('course.update');
	});




});


