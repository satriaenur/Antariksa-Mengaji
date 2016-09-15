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

    // registration
    $this->get('/', ['as' => 'home', 'uses' => 'RegisterController@index']);
    $this->post('/register/store', ['as' => 'register.store', 'uses' => 'RegisterController@postStore']);

    // data
    $this->get('/data/cities', ['as' => 'data.cities', 'uses' => 'LocationController@getAjaxCities']);
    $this->get('/data/jalur', ['as' => 'data.jalurdetail', 'uses' => 'JalurController@getDetailJalur']);

    // admin
    $this->get('/admin/pendaftar', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
    $this->get('/datapendaftar',['as' => 'datapendaftar.index', 'uses' => 'AdminController@data']);
    $this->get('/datapendaftar/detail/{id}',['as' => 'datapendaftar.detail', 'uses' => 'AdminController@detail']);
    $this->get('/admin/pendaftar/export/{gender}', ['as' => 'admin.pendaftar.export', 'uses' => 'AdminController@exportRekap']);

    // User Dashboard
    $this->group(array('before'=>'auth'),function(){
        $this->get('/user',['as' => 'user.index', 'uses' => 'PendaftarController@index']);
        $this->get('/user/berita',['as' => 'user.berita', 'uses' => 'PendaftarController@index']);
        $this->get('/user/status',['as' => 'user.status', 'uses' => 'PendaftarController@status']);
        $this->get('/user/materi',['as' => 'user.materi', 'uses' => 'PendaftarController@materi']);
        $this->get('/user/kuis',['as' => 'user.kuis', 'uses' => 'PendaftarController@kuis']);
        $this->get('/user/nilai',['as' => 'user.nilai', 'uses' => 'PendaftarController@nilai']);
        $this->get('/user/profile',['as' => 'user.profile', 'uses' => 'PendaftarController@profile']);
        $this->get('/user/store',['as' => 'user.store', 'uses' => 'PendaftarController@profil']);
    });
});
