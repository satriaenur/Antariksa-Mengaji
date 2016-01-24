<?php

define('MSG_SUCCESS', 'msg_success');
define('MSG_DANGER', 'msg_danger');
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'RegisterController@index']);
    Route::post('/register/store', ['as' => 'register.store', 'uses' => 'RegisterController@postStore']);
    Route::get('/data/cities', ['as' => 'data.cities', 'uses' => 'LocationController@getAjaxCities']);
});
