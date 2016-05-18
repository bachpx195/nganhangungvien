<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
				'App\Repositories\IUserRepo',
				'App\Repositories\UserRepo');
		
		$this->app->bind(
				'App\Repositories\IRoleRepo',
				'App\Repositories\RoleRepo');

		$this->app->bind(
			'App\Repositories\ICandidateRepo',
			'App\Repositories\CandidateRepo');
	}

}
