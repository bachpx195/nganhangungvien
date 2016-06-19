<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\ExperienceYears;
use App\Model\ForeignLanguage;
use App\Model\Job;
use App\Model\Level;
use App\Model\Salary;
use App\Repositories\ICandidateRepo;
use App\Repositories\IConfigRepo;
use App\Repositories\IProvinceRepo;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{

    protected $candidateRepo, $provinceRepo, $configRepo;

    public function __construct(
        ICandidateRepo $candidateRepo,
        IProvinceRepo $provinceRepo,
        IConfigRepo $configRepo)
    {
        $this->candidateRepo = $candidateRepo;
        $this->provinceRepo = $provinceRepo;
        $this->configRepo = $configRepo;
    }

    /**
     * Get dropdown data
     *
     *
     */
    protected function dropdownData()
    {
        $dropdownData = [];
        $dropdownData['provinces'] = $this->provinceRepo->getSortedList();
        $dropdownData['occupations'] = Job::all();
        $dropdownData['salaryGrades'] = Salary::all();
        $dropdownData['degrees'] = Level::all();
        $dropdownData['yearOfexps'] = ExperienceYears::all();
        $dropdownData['languages'] = ForeignLanguage::all();

        return $dropdownData;
    }

    protected function candidatesData()
    {
        $candidatesData = [];
        $candidatesData['candidate'] = $this->candidateRepo->candidateStatistic();
        $candidatesData['bestView'] = $this->candidateRepo->bestViewStatistic();

        return $candidatesData;
    }

    protected function errorView()
    {
        return response()->view('front.errors.404', [], 404);
    }

    /**
     * Common function for get current login user
     * @return mixed
     */
    protected function getCurrentUser() {
        $user = Auth::user();
        return $user;
    }
}