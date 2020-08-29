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
	    Route::post('/store', 'CourseModelController@store')->name('course.store');
	});
	//-------------------------------User Controller-------------------------------------------
	Route::group(['prefix' => 'users'], function() {
		Route::get('/', 'UserModelController@index')->name('view.user.index');
		Route::get('/create', 'UserModelController@create')->name('view.user.create');
		Route::get('/edit/{id}', 'UserModelController@edit')->name('view.user.edit');
		Route::post('/store', 'UserModelController@store')->name('user.store');
		Route::put('/update/{id}', 'UserModelController@update')->name('user.update');
	});

	//-------------------------------Role Controller-------------------------------------------
	Route::group(['prefix' => 'roles'], function() {
		Route::get('/', 'RoleModelController@index')->name('view.role.index');
		Route::get('/create', 'RoleModelController@create')->name('view.role.create');
		Route::get('/edit/{id}', 'RoleModelController@edit')->name('view.role.edit');
		Route::post('/store', 'RoleModelController@store')->name('role.store');
		Route::put('/update/{id}', 'RoleModelController@update')->name('role.update');
	});

	//-------------------------------Permission Controller-------------------------------------------
	Route::group(['prefix' => 'permissions'], function() {
		Route::get('/', 'PermissionModelController@index')->name('view.permission.index');
		Route::get('/create', 'PermissionModelController@create')->name('view.permission.create');
		Route::get('/edit/{id}', 'PermissionModelController@edit')->name('view.permission.edit');
		Route::post('/store', 'PermissionModelController@store')->name('permission.store');
		Route::put('/update/{id}', 'PermissionModelController@update')->name('permission.update');
	});


});


