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

$this::group(['middleware' => ['web']], function () {
    #Authentication Routes...
    $this->get('login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
    $this->post('login', ['as' => 'auth.login.post', 'uses' => 'Auth\AuthController@login']);
    $this->get('logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

    $this->get('/home', ['as' => 'home.index', 'uses'=>'HomeController@index']);
    $this->get('/admin', function(){
       return redirect()->route('admin.index');
    });
    $this->get('/', ['as' => 'home', 'uses' => 'RegisterController@index']);
    $this->post('/register/store', ['as' => 'register.store', 'uses' => 'RegisterController@postStore']);
    $this->get('/data/cities', ['as' => 'data.cities', 'uses' => 'LocationController@getAjaxCities']);
    $this->get('/admin/pendaftar', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    $this->get('/admin/pendaftar/export/{gender}', ['as' => 'admin.pendaftar.export', 'uses' => 'AdminController@exportRekap']);
});
