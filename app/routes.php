<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');

Route::get('login', 'HomeController@index');

Route::get('create', 'HomeController@create');

Route::post('dologin', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));

// User Routes
Route::resource('users', 'UserController');

//Route::post('users.store', 'UserController@store');

// follow resource routing convention
Route::resource('blogs', 'BlogController');

Route::group(array('before' => 'auth'), function(){

	Route::resource('blogs', 'BlogController');

});

//testing route for delete

Route::delete('tasks/{id}', ['as' => 'delete_task_path', 'uses' => function($id){

	return 'Deleted task with an id of ' .$id;

}]);


//Pagination

Route::resource('items' , 'ItemsController');

//Image Manipulation

Route::resource('photos', 'PhotosController');

// Route::get('photos', function(){

// 	$image = Image::make(file_get_contents('http://2.bp.blogspot.com/-GP0NtlGdavM/U1e6H3OEduI/AAAAAAAACqY/bbhnYUeUdT0/s1600/julia-barretto-two-piece-2.jpg'));
	
// 	return Response::make($image, 200, ['Content-Type' => 'image/jpg']);
// });













