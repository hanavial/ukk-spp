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
 Route::get('/', function () {
     return view('welcome');
 });
*/

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

//User
Route::group(['middleware' => 'auth'], function () {
    Route::resource('/kelas', 'KelasController');
});

//Auth Admin
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

//Admin
Route::get('/', 'AdminController@index');
Route::get('/admin', 'AdminController@index')->name('admin.home');

Route::group(['prefix' => 'admin','middleware' => 'auth:admin'], function () {
    Route::resource('/kelas', 'KelasController');
    Route::resource('/user', 'UserController');
});
/*
Auth::routes();
Route::view('/', 'welcome');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
});

Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');

Route::get('admin-login','Auth\AdminLoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\AdminLoginController@login']);

Route::get('admin-register','Auth\AdminLoginController@showRegisterPage');
Route::post('admin-register', 'Auth\AdminLoginController@register')->name('admin.register');
*/
