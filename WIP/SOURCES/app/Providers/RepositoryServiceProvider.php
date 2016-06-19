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

		$this->app->bind(
			'App\Repositories\IEmployerRepo',
			'App\Repositories\EmployerRepo');

		$this->app->bind(
			'App\Repositories\ILevelRepo',
			'App\Repositories\LevelRepo');

		$this->app->bind(
			'App\Repositories\ISalaryRepo',
			'App\Repositories\SalaryRepo');

		$this->app->bind(
			'App\Repositories\IExigencyRepo',
			'App\Repositories\ExigencyRepo');

		$this->app->bind(
			'App\Repositories\IEmploymentStatusRepo',
			'App\Repositories\EmploymentStatusRepo');

		$this->app->bind(
			'App\Repositories\ICompanySizeRepo',
			'App\Repositories\CompanySizeRepo');

		$this->app->bind(
			'App\Repositories\IRankRepo',
			'App\Repositories\RankRepo');

		$this->app->bind(
			'App\Repositories\IJobRepo',
			'App\Repositories\JobRepo');

		$this->app->bind(
			'App\Repositories\IExperienceYearsRepo',
			'App\Repositories\ExperienceYearsRepo');

		$this->app->bind(
			'App\Repositories\IForeignLanguageRepo',
			'App\Repositories\ForeignLanguageRepo');

		$this->app->bind(
			'App\Repositories\IProvinceRepo',
			'App\Repositories\ProvinceRepo');

		$this->app->bind(
			'App\Repositories\INewRepo',
			'App\Repositories\NewRepo');

		$this->app->bind(
			'App\Repositories\IExperienceRepo',
			'App\Repositories\ExperienceRepo');

		$this->app->bind(
			'App\Repositories\ICandidateCertificateRepo',
			'App\Repositories\CandidateCertificateRepo');

		$this->app->bind(
			'App\Repositories\IITLevelRepo',
			'App\Repositories\ITLevelRepo');

		$this->app->bind(
			'App\Repositories\ICandidateForeignLanguageRepo',
			'App\Repositories\CandidateForeignLanguageRepo');

		$this->app->bind(
			'App\Repositories\IContactPersonRepo',
			'App\Repositories\ContactPersonRepo');

		$this->app->bind(
			'App\Repositories\IConfigRepo',
			'App\Repositories\ConfigRepo');

		$this->app->bind(
			'App\Repositories\ITransactionRepo',
			'App\Repositories\TransactionRepo');

		$this->app->bind(
			'App\Repositories\ISaveCvRepo',
			'App\Repositories\SaveCvRepo');
	}

}
