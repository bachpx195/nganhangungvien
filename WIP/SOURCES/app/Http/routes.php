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
	Route::match(['get'], '/candidate', [
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

	// BEGIN NEWS
	Route::match(['get', 'post'], '/news/list', [
		'as' => 'admin.news.list', 'uses' => 'Admin\NewsController@newsList'
	]);

	Route::match(['get', 'post'], 'news/form', [
		'as' => 'admin.news.form', 'uses' => 'Admin\NewsController@newsForm'
	]);

	Route::post('/news/delete/{id}', [
		'as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@delete'
	]);
	// END NEWS

	Route::match(['get', 'post'], '/province/list', [
		'as' => 'admin.province.list', 'uses' => 'Admin\ProvinceController@tinh'
	]);

	Route::match(['get', 'post'], 'province/form', [
		'as' => 'admin.province.form', 'uses' => 'Admin\ProvinceController@tinhForm'
	]);

	Route::post('/province/delete/{id}', [
		'as' => 'admin.province.delete', 'uses' => 'Admin\ProvinceController@delete'
	]);

	Route::match(['get', 'post'], '/level/list', [
		'as' => 'admin.level.list', 'uses' => 'Admin\LevelController@levelList'
	]);

	Route::match(['get', 'post'], 'level/form', [
		'as' => 'admin.level.form', 'uses' => 'Admin\LevelController@levelForm'
	]);

	Route::post('/level/delete/{id}', [
		'as' => 'admin.level.delete', 'uses' => 'Admin\LevelController@delete'
	]);

	Route::match(['get', 'post'], '/rank/list', [
		'as' => 'admin.rank.list', 'uses' => 'Admin\RankController@rankList'
	]);

	Route::match(['get', 'post'], 'rank/form', [
		'as' => 'admin.rank.form', 'uses' => 'Admin\RankController@rankForm'
	]);

	Route::post('/rank/delete/{id}', [
		'as' => 'admin.rank.delete', 'uses' => 'Admin\RankController@delete'
	]);

	Route::match(['get', 'post'], '/salary/list', [
		'as' => 'admin.salary.list', 'uses' => 'Admin\SalaryController@salaryList'
	]);

	Route::match(['get', 'post'], 'salary/form', [
		'as' => 'admin.salary.form', 'uses' => 'Admin\SalaryController@salaryForm'
	]);

	Route::post('/salary/delete/{id}', [
		'as' => 'admin.salary.delete', 'uses' => 'Admin\SalaryController@delete'
	]);

	Route::match(['get', 'post'], '/job/list', [
		'as' => 'admin.job.list', 'uses' => 'Admin\JobController@jobList'
	]);

	Route::match(['get', 'post'], 'job/form', [
		'as' => 'admin.job.form', 'uses' => 'Admin\JobController@jobForm'
	]);

	Route::post('/job/delete/{id}', [
		'as' => 'admin.job.delete', 'uses' => 'Admin\JobController@delete'
	]);

	Route::match(['get', 'post'], '/exigency/list', [
		'as' => 'admin.exigency.list', 'uses' => 'Admin\ExigencyController@exigencyList'
	]);

	Route::match(['get', 'post'], 'exigency/form', [
		'as' => 'admin.exigency.form', 'uses' => 'Admin\ExigencyController@exigencyForm'
	]);

	Route::post('/exigency/delete/{id}', [
		'as' => 'admin.exigency.delete', 'uses' => 'Admin\ExigencyController@delete'
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
