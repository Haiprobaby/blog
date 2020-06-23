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

Route::get('/', function () {
    return view('index');
})->middleware('login');




Route::group(['prefix'=>'user',],function()
{
		Route::get('signup','userController@getsignup');

		Route::post('signup','userController@postsignup');

		Route::get('login','userController@getlogin');
		
		Route::post('login','userController@postlogin');

		Route::get('logout','userController@getlogout');
		
		Route::post('upload','ImageController@upload');

		Route::get('viewimages','ImageController@viewimages');

		Route::get('viewbycate/{id}','ImageController@viewbycate');
});




