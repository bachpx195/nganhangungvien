﻿<?php

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

Route::match(['get', 'post'], '/admin', [
	'as' => 'index', 'uses' => 'WelcomeController@indexAdmin'
]);

Route::get('/admin/login', [
	'as' => 'admin.getLogin', 'uses' => 'Auth\AuthController@getLogin'
]);
Route::post('/admin/login', [
	'as' => 'admin.postLogin', 'uses' => 'Auth\AuthController@postLogin'
]);
Route::get('/admin/logout', [
	'as' => 'admin.logout', 'uses' => 'Auth\AuthController@getLogout'
]);
Route::post('/login', [
	'as' => 'front.postLogin', 'uses' => 'Auth\AuthController@postLoginFront'
]);
Route::get('/logout', [
	'as' => 'front.logout', 'uses' => 'Auth\AuthController@getLogoutFront'
]);


/**
 * Backend
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function()
{
	//router admin
	Route::match(['get'], '/', [
		'as' => 'admin', 'uses' => 'Admin\CandidateController@candidateList'
	]);

	/**************** Candidate ****************/
	Route::match(['get'], '/candidate', [
		'as' => 'admin.candidate.list', 'uses' => 'Admin\CandidateController@candidateList'
	]);

	Route::match(['get', 'post'], '/candidate/form', [
		'as' => 'admin.candidate.form', 'uses' => 'Admin\CandidateController@candidateCreate'
	]);

	Route::match(['get', 'post'], '/candidate/update/{id}', [
		'as' => 'admin.candidate.update', 'uses' => 'Admin\CandidateController@candidateUpdate'
	]);

	Route::post('/candidate/delete/{id}', [
		'as' => 'admin.candidate.delete', 'uses' => 'Admin\CandidateController@delete'
	]);

	Route::match(['post'], '/candidate/getList', [
		'as' => 'admin.candidate.getList', 'uses' => 'Admin\CandidateController@getList'
	]);

	Route::post('/candidate/status/{id}', [
		'as' => 'admin.candidate.status', 'uses' => 'Admin\CandidateController@changeStatus'
	]);

	/**************** Employer ****************/
	Route::match(['get'], '/employer/list', [
		'as' => 'admin.employer.list', 'uses' => 'Admin\EmployerController@employerList'
	]);

	Route::match(['post'], '/employer/getList', [
		'as' => 'admin.candidate.getList', 'uses' => 'Admin\EmployerController@getList'
	]);

	Route::match(['get'], '/employer/detail', [
		'as' => 'admin.employer.detail', 'uses' => 'Admin\EmployerController@employerDetail'
	]);

	Route::post('/employer/status/{id}', [
		'as' => 'admin.employer.status', 'uses' => 'Admin\EmployerController@employerStatus']);

	Route::post('/employer/set-vip/{id}', [
		'as' => 'admin.employer.set_vip', 'uses' => 'Admin\EmployerController@setVip']);

	Route::post('/employer/delete/{id}', [
		'as' => 'admin.employer.delete', 'uses' => 'Admin\EmployerController@delete'
	]);

	/***************** Transaction ***************/
	Route::match(['get'], '/giao-dich/danh-sach', [
		'as' => 'admin.transaction.list', 'uses' => 'Admin\TransactionController@transactionList'
	]);
	Route::match(['post'], '/transaction/getList', [
		'as' => 'admin.transaction.getList', 'uses' => 'Admin\TransactionController@getList'
	]);

	// BEGIN NEWS
	Route::match(['get', 'post'], '/tin-tuc/danh-sach', [
		'as' => 'admin.news.list', 'uses' => 'Admin\NewsController@newsList'
	]);

	Route::match(['get', 'post'], 'tin-tuc/form', [
		'as' => 'admin.news.form', 'uses' => 'Admin\NewsController@newsForm'
	]);

	Route::post('/news/delete/{id}', [
		'as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@delete'
	]);
	// END NEWS

	/********************* USER ************************/
	Route::match(['get'], '/nguoi-dung/danh-sach', [
		'as' => 'admin.user.list', 'uses' => 'Admin\UserController@userList'
	]);
	Route::match(['post'], '/user/getList', [
		'as' => 'admin.user.getList', 'uses' => 'Admin\UserController@getList'
	]);
	Route::match(['get', 'post'], '/nguoi-dung/dang-ky', [
		'as' => 'admin.user.register', 'uses' => 'Admin\UserController@userFormRegister'
	]);
	Route::match(['get', 'post'], '/nguoi-dung/cap-nhat/{id}', [
		'as' => 'admin.user.update', 'uses' => 'Admin\UserController@userFormUpdate'
	]);
	Route::post('/user/status/{id}', [
		'as' => 'admin.user.status', 'uses' => 'Admin\UserController@userStatus'
	]);


	Route::match(['get', 'post'], '/quan-ly-tinh/danh-sach', [
		'as' => 'admin.province.list', 'uses' => 'Admin\ProvinceController@tinh'
	]);

	/***************** PERMISSION ****************/
	Route::match(['get'], '/phan-quyen/danh-sach', [
		'as' => 'admin.permission.list', 'uses' => 'Admin\PermissionController@userRoleList'
	]);
	Route::match(['post'], '/phan-quyen/cap-nhat', [
		'as' => 'admin.permission.update', 'uses' => 'Admin\PermissionController@userRoleUpdate'
	]);


	Route::match(['get', 'post'], '/quan-ly-tinh/danh-sach', [
		'as' => 'admin.province.list', 'uses' => 'Admin\ProvinceController@tinh'
	]);

	Route::match(['get', 'post'], 'quan-ly-tinh/form', [
		'as' => 'admin.province.form', 'uses' => 'Admin\ProvinceController@tinhForm'
	]);

	Route::post('/province/delete/{id}', [
		'as' => 'admin.province.delete', 'uses' => 'Admin\ProvinceController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-trinh-do-hoc-van/danh-sach', [
		'as' => 'admin.level.list', 'uses' => 'Admin\LevelController@levelList'
	]);

	Route::match(['get', 'post'], 'quan-ly-trinh-do-hoc-van/form', [
		'as' => 'admin.level.form', 'uses' => 'Admin\LevelController@levelForm'
	]);

	Route::post('/level/delete/{id}', [
		'as' => 'admin.level.delete', 'uses' => 'Admin\LevelController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-cap-bac/danh-sach', [
		'as' => 'admin.rank.list', 'uses' => 'Admin\RankController@rankList'
	]);

	Route::match(['get', 'post'], 'quan-ly-cap-bac/form', [
		'as' => 'admin.rank.form', 'uses' => 'Admin\RankController@rankForm'
	]);

	Route::post('/rank/delete/{id}', [
		'as' => 'admin.rank.delete', 'uses' => 'Admin\RankController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-luong/danh-sach', [
		'as' => 'admin.salary.list', 'uses' => 'Admin\SalaryController@salaryList'
	]);

	Route::match(['get', 'post'], 'quan-ly-luong/form', [
		'as' => 'admin.salary.form', 'uses' => 'Admin\SalaryController@salaryForm'
	]);

	Route::post('/salary/delete/{id}', [
		'as' => 'admin.salary.delete', 'uses' => 'Admin\SalaryController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-nghe-nghiep/danh-sach', [
		'as' => 'admin.job.list', 'uses' => 'Admin\JobController@jobList'
	]);

	Route::match(['get', 'post'], 'quan-ly-nghe-nghiep/form', [
		'as' => 'admin.job.form', 'uses' => 'Admin\JobController@jobForm'
	]);

	Route::post('/job/delete/{id}', [
		'as' => 'admin.job.delete', 'uses' => 'Admin\JobController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-nhu-cau-cong-viec/danh-sach', [
		'as' => 'admin.exigency.list', 'uses' => 'Admin\ExigencyController@exigencyList'
	]);

	Route::match(['get', 'post'], 'quan-ly-nhu-cau-cong-viec/form', [
		'as' => 'admin.exigency.form', 'uses' => 'Admin\ExigencyController@exigencyForm'
	]);

	Route::post('/exigency/delete/{id}', [
		'as' => 'admin.exigency.delete', 'uses' => 'Admin\ExigencyController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-quy-mo-cong-ty/danh-sach', [
		'as' => 'admin.companysize.list', 'uses' => 'Admin\CompanySizeController@companySizeList'
	]);

	Route::match(['get', 'post'], 'quan-ly-quy-mo-cong-ty/form', [
		'as' => 'admin.companysize.form', 'uses' => 'Admin\CompanySizeController@companySizeForm'
	]);

	Route::post('/company-size/delete/{id}', [
		'as' => 'admin.companysize.delete', 'uses' => 'Admin\CompanySizeController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-nam-kinh-nghiem/danh-sach', [
		'as' => 'admin.experienceyears.list', 'uses' => 'Admin\ExperienceYearsController@experienceYearsList'
	]);

	// Route::match(['get', 'post'], 'quan-ly-nam-kinh-nghiem/form', [
	// 	'as' => 'admin.experienceyears.form', 'uses' => 'Admin\ExperienceYearsController@experienceYearsForm'
	// ]);

	Route::post('/experience-years/delete/{id}', [
		'as' => 'admin.experienceyears.delete', 'uses' => 'Admin\ExperienceYearsController@delete'
	]);

	Route::match(['get', 'post'], '/config/list', [
		'as' => 'admin.config.list', 'uses' => 'Admin\ConfigController@configList'
	]);

	Route::match(['get', 'post'], 'config/form', [
		'as' => 'admin.config.form', 'uses' => 'Admin\ConfigController@configForm'
	]);

	Route::post('/config/delete/{id}', [
		'as' => 'admin.config.delete', 'uses' => 'Admin\ConfigController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-hinh-thuc-cong-viec/danh-sach', [
		'as' => 'admin.employmentstatus.list', 'uses' => 'Admin\EmploymentStatusController@employmentStatusList'
	]);

	Route::match(['get', 'post'], 'quan-ly-hinh-thuc-cong-viec/form', [
		'as' => 'admin.employmentstatus.form', 'uses' => 'Admin\EmploymentStatusController@employmentStatusForm'
	]);

	Route::post('/employment-status/delete/{id}', [
		'as' => 'admin.employmentstatus.delete', 'uses' => 'Admin\EmploymentStatusController@delete'
	]);

	Route::match(['get', 'post'], '/quan-ly-ngoai-ngu/danh-sach', [
		'as' => 'admin.foreignlanguage.list', 'uses' => 'Admin\ForeignLanguageController@foreignlanguageList'
	]);

	Route::match(['get', 'post'], 'quan-ly-ngoai-ngu/form', [
		'as' => 'admin.foreignlanguage.form', 'uses' => 'Admin\ForeignLanguageController@foreignLanguageForm'
	]);

	Route::post('/foreign-language/delete/{id}', [
		'as' => 'admin.foreignlanguage.delete', 'uses' => 'Admin\ForeignLanguageController@delete'
	]);

	Route::match(['get', 'post'], '/video', [
		'as' => 'admin.video', 'uses' => 'Admin\VideoController@manageVideo'
	]);

	Route::match(['get', 'post'], '/tai-khoan/thay-doi-mat-khau', [
		'as' => 'admin.account.changepassword', 'uses' => 'Admin\AccountProfileController@changeAccountPassword'
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
	Route::get('/', ['as' => 'home', 'uses' => 'Front\HomeController@index']);

	Route::match(['get', 'post'], '/tuyen-dung-thue-ngoai', [
		'as' => 'pages.outsourcing_package', 'uses' => 'Front\PagesController@outsourcingPackage'
	]);

	Route::match(['get', 'post'], '/chinh-sach-bao-mat-thong-tin', [
		'as' => 'pages.chinhSachBaoMat', 'uses' => 'Front\PagesController@privacyPolicy'
	]);

	Route::match(['get', 'post'], '/giai-quyet-tranh-chap', [
		'as' => 'pages.giaiQuyTranhChap', 'uses' => 'Front\PagesController@giaiQuyetTranhChap'
	]);

	Route::match(['get', 'post'], '/quy-che-website-tmdt', [
		'as' => 'pages.quyCheWebsite', 'uses' => 'Front\PagesController@quyCheWebSiteTMDT'
	]);

	Route::match(['get', 'post'], '/don-dang-ky', [
		'as' => 'pages.donDangKy', 'uses' => 'Front\PagesController@donDangKyCCDVTMDT'
	]);

	Route::match(['get', 'post'], '/de-an-website', [
		'as' => 'pages.deAnWebsite', 'uses' => 'Front\PagesController@deAnWebsite'
	]);

	Route::match(['get', 'post'], '/mau-hop-dong', [
		'as' => 'pages.mauHopDong', 'uses' => 'Front\PagesController@mauHopDong'
	]);

	Route::match(['get', 'post'], '/dang-ky-bo-cong-thuong', [
		'as' => 'pages.dangKyBoCongThuong', 'uses' => 'Front\PagesController@dangKyBoCongThuong'
	]);

	Route::match(['get', 'post'], '/dieu-khoan-su-dung', [
		'as' => 'pages.policy', 'uses' => 'Front\PagesController@policy'
	]);

	Route::match(['get', 'post'], '/dang-ky-tai-khoan-vip', [
		'as' => 'pages.regist_vip', 'uses' => 'Front\PagesController@registVip'
	]);

	Route::match(['get', 'post'], '/tim-kiem-ung-vien', [
		'as' => 'candidate.search', 'uses' => 'Front\SearchController@index'
	]);

	Route::match(['get', 'post'], '/ung-vien/{slug}', [
		'as' => 'candidate.category', 'uses' => 'Front\SearchController@listByCategory'
	]);

	Route::match(['get', 'post'], '/danh-sach-ung-vien-nhieu-nguoi-xem', [
		'as' => 'candidate.view', 'uses' => 'Front\SearchController@listByView'
	]);

	Route::match(['get', 'post'], '/ho-so-ung-vien-moi-nhat', [
		'as' => 'candidate.new', 'uses' => 'Front\SearchController@listByTime'
	]);
	
	Route::match(['get', 'post'], '/ho-so/{slug}_{id}', [
		'as' => 'candidate.profile', 'uses' => 'Front\CandidateProfileController@index'
	]);

	Route::match(['get', 'post'], '/danh-sach-ung-vien-nhieu-nguoi-xem', [
		'as' => 'candidate.view', 'uses' => 'Front\SearchController@listByView'
	]);
	
	//Đăng ký tài khoản
	Route::match(['get', 'post'], '/nha-tuyen-dung/dang-ky', [
		'as' => 'employer.register', 'uses' => 'Front\EmployerRegisterController@register'
	]);

	Route::match(['get', 'post'], '/candidate/form', [
		'as' => 'candidate.form', 'uses' => 'Front\CandidateController@candidateForm'
	]);
	Route::match(['get'], '/tai-lieu', [
		'as' => 'news.show', 'uses' => 'Front\NewsController@index'
	]);

	Route::match(['get', 'post'], '/tai-lieu/{slug}_{id}', [
		'as' => 'news.profile', 'uses' => 'Front\NewsController@profile'
	]);


	Route::match(['get', 'post'], '/news/upload', [
		'as' => 'news.upload', 'uses' => 'Admin\NewsController@upload_image'
	]);

	Route::match(['get', 'post'], '/kich-hoat/{id}-{confirmation_code}-{password}', [
		'as' => 'user.active', 'uses' => 'Front\EmployerRegisterController@confirm'
	]);

	Route::match(['get', 'post'], '/tai-khoan/kiem-tra-xac-nhan/{id}-{confirmation_code}', [
		'as' => 'user.actived', 'uses' => 'Front\EmployerRegisterController@confirmed'
	]);
	Route::match(['post'],'/quen-mat-khau', [
		'as' => 'user.reset.password', 'uses' => 'Front\ResetPasswordController@resetPassword'
	]);
	Route::match(['get', 'post'], '/tao-moi-mat-khau/{id}-{code}', [
		'as' => 'user.reset.form', 'uses' => 'Front\ResetPasswordController@confirm'
	]);
	// Route::get('/test', function(){
	// 	return view('front.candidate.candidate_create_success');
	// });

	Route::match(['post'], '/user/become-vip', [
		'as' => 'user.become_vip', 'uses' => 'UserController@userBecomeVip'
	]);
	Route::match(['post'], '/user/outsourcing', [
		'as' => 'user.outsourcing', 'uses' => 'UserController@userOutsourcing'
	]);
	Route::match(['post'], '/user/outsourcing', [
		'as' => 'user.outsourcing', 'uses' => 'UserController@userOutsourcing'
	]);
});

Route::group(['middleware' => ['auth']], function() {
	//Profile
	Route::match(['get'], '/user/account', [
		'as' => 'user.account', 'uses' => 'Front\AccountProfileController@manageAccountProfile'
	]);
	Route::match(['post'], '/user/account/changepassword', [
		'as' => 'user.account.changepassword', 'uses' => 'Front\AccountProfileController@changeAccountPassword'
	]);
	Route::match(['post'], '/user/account/changecompanyinfo', [
		'as' => 'user.account.changecompanyinfo', 'uses' => 'Front\AccountProfileController@changeCompanyInformation'
	]);
	Route::match(['post'], '/user/account/changecontactperson', [
		'as' => 'user.account.changecontactperson', 'uses' => 'Front\AccountProfileController@changeEmployerContactPersonInfo'
	]);

	// Employer Transaction
	Route::match(['get'], '/user/transaction', [
		'as' => 'user.transaction', 'uses' => 'Front\EmployerTransactionController@getEmployerTransaction'
	]);
	Route::match(['get'], '/user/transaction/loadmore', [
		'as' => 'user.transaction.loadmore', 'uses' => 'Front\EmployerTransactionController@loadMoreTransaction'
	]);
	Route::match(['get', 'post'], '/user/savedprofile', [
		'as' => 'user.saved.profile', 'uses' => 'Front\EmployerSavedCvController@getSavedProfiles'
	]);
	Route::match(['get'], '/user/savedprofile/loadmore', [
		'as' => 'user.saved.profile.loadmore', 'uses' => 'Front\EmployerSavedCvController@loadMoreSavedCv'
	]);
	Route::match(['get', 'post'], '/user/pay', [
		'as' => 'user.pay', 'uses' => 'UserController@userPay'
	]);
	Route::match(['get', 'post'], '/user/top-up', [
		'as' => 'user.top_up', 'uses' => 'UserController@userTopUp'
	]);
	Route::match(['get', 'post'], '/user/viewprofile', [
		'as' => 'user.view.profile', 'uses' => 'Front\CandidateProfileController@viewContact'
	]);
	Route::match(['post'], '/user/pay-atm', [
		'as' => 'user.pay_atm', 'uses' => 'UserController@userPayByAtm'
	]);
	Route::match(['get', 'post'], '/user/atm-success', [
		'as' => 'user.atm_success', 'uses' => 'UserController@userAtmSuccess'
	]);
});

Route::any('{all?}','Front\HomeController@error')->where('all','(.*)');