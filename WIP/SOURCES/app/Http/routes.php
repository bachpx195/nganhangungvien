<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::match(['get', 'post'], '/', [
	'as' => 'index', 'uses' => 'WelcomeController@index'
]);*/

/**
 * Backend
 */
Route::group(['prefix' => 'admin'], function()
{
	Route::match(['get'], '/candidate/list', [
		'as' => 'admin.candidate.list', 'uses' => 'Admin\CandidateController@candidateList'
	]);

	Route::match(['get', 'post'], '/candidate/form', [
		'as' => 'admin.candidate.form', 'uses' => 'Admin\CandidateController@candidateForm'
	]);

	Route::match(['get', 'post'], '/candidate/update/{id}', [
		'as' => 'admin.candidate.update', 'uses' => 'Admin\CandidateController@candidateUpdate'
	]);

	Route::post('/candidate/delete/{id}', [
		'as' => 'admin.candidate.delete', 'uses' => 'Admin\CandidateController@delete'
	]);

	Route::match(['get'], '/news/list', [
		'as' => 'admin.news.list', 'uses' => 'Admin\NewController@newsList'
	]);

	Route::post('/news/delete/{id}', [
		'as' => 'admin.news.delete', 'uses' => 'Admin\NewController@delete'
	]);

	Route::match(['get', 'post'], '/province/list', [
		'as' => 'admin.province.list', 'uses' => 'Admin\ProvinceController@tinh'
	]);

	Route::match(['get', 'post'], 'province/form', [
		'as' => 'admin.province.form', 'uses' => 'Admin\ProvinceController@tinhForm'
	]);

	Route::post('/province/delete/{id}', [
		'as' => 'admin.province.delete', 'uses' => 'Admin\ProvinceController@delete'
	]);
});

/**
 * Authentication
 */
Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => ['auth', 'roles'], 'roles' => ['manager']], function() {
	
	Route::match(['get', 'post'], '/user/list', [
		'as' => 'user.list', 'uses' => 'UserController@userList'
	]);
	
	Route::match(['get', 'post'], '/user/form', [
		'as' => 'user.form', 'uses' => 'UserController@userForm'
	]);
	
	Route::post('/user/delete/{id}', [
		'as' => 'user.delete', 'uses' => 'UserController@delete'
	]);
});

/**
 * Frontend
 */
Route::group(['prefix' => '', ['middleware' => 'web']], function()
{
	Route::get('/', 'Front\HomeController@index');

	Route::match(['get', 'post'], '/tim-kiem-ung-vien', [
		'as' => 'candidate.search', 'uses' => 'Front\SearchController@index'
	]);
	
	Route::match(['get', 'post'], '/ho-so/{slug}_{id}', [
		'as' => 'candidate.profile', 'uses' => 'Front\CandidateProfileController@index'
	]);
	
	//Đăng ký tài khoản
	Route::match(['get', 'post'], '/nha-tuyen-dung/dang-ky', [
		'as' => 'employer.register', 'uses' => 'Front\EmployerRegisterController@register'
	]);

	//Profile
	Route::match(['get', 'post'], '/tai-khoan/profile', [
		'as' => 'account.profile', 'uses' => 'Front\AccountProfileController@index'
	]);
});

Route::match(['get', 'post'], '/candidate/form', [
	'as' => 'candidate.form', 'uses' => 'Front\CandidateController@candidateForm'
]);

Route::match(['get', 'post'], '/news/form', [
	'as' => 'new.form', 'uses' => 'Admin\NewController@newForm'
]);
