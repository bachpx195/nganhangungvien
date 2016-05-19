<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Repositories\IEmploymentStatusRepo;
use App\Repositories\IExigencyRepo;
use App\Repositories\IExperienceYearsRepo;
use App\Repositories\IForeignLanguageRepo;
use App\Repositories\IJobRepo;
use App\Repositories\ILevelRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IRankRepo;
use App\Repositories\ISalaryRepo;
use Illuminate\Http\Request;

use App\Repositories\ICandidateRepo;
use App\Model\Candidate;

class CandidateController extends Controller {

    protected $candidateRepo;
    protected $experienceYearsRepo;
    protected $rankRepo;
    protected $jobRepo;
    protected $exigencyRepo;
    protected $salaryRepo;
    protected $provinceRepo;
    protected $levelRepo;
    protected $foreignLanguageRepo;
    protected $employmentStatusRepo;

    /**
     * CandidateController constructor.
     *
     * @param ICandidateRepo $candidateRepo
     * @param IExperienceYearsRepo $experienceYearsRepo
     * @param IRankRepo $rankRepo
     * @param IJobRepo $jobRepo
     * @param IExigencyRepo $exigencyRepo
     * @param ISalaryRepo $salaryRepo
     * @param IProvinceRepo $provinceRepo
     * @param ILevelRepo $levelRepo
     * @param IForeignLanguageRepo $foreignLanguageRepo
     * @param IEmploymentStatusRepo $employmentStatusRepo
     * @param ICandidateRepo $candidateRepo
     */
    public function __construct(
        ICandidateRepo $candidateRepo,
        IExperienceYearsRepo $experienceYearsRepo,
        IRankRepo $rankRepo,
        IJobRepo $jobRepo,
        IExigencyRepo $exigencyRepo,
        ISalaryRepo $salaryRepo,
        IProvinceRepo $provinceRepo,
        ILevelRepo $levelRepo,
        IForeignLanguageRepo $foreignLanguageRepo,
        IEmploymentStatusRepo $employmentStatusRepo
    ) {

        $this->candidateRepo = $candidateRepo;
        $this->experienceYearsRepo = $experienceYearsRepo;
        $this->rankRepo = $rankRepo;
        $this->jobRepo = $jobRepo;
        $this->exigencyRepo = $exigencyRepo;
        $this->salaryRepo = $salaryRepo;
        $this->provinceRepo = $provinceRepo;
        $this->levelRepo = $levelRepo;
        $this->foreignLanguageRepo = $foreignLanguageRepo;
        $this->employmentStatusRepo = $employmentStatusRepo;
    }

    /**
     * Build a candidate's form
     *
     * @param Request $request
     * @return mixed
     */
    public function candidateForm(Request $request) {
        $salaries = $this->salaryRepo->all();
        $experienceYears = $this->experienceYearsRepo->all();
        $ranks = $this->rankRepo->all();
        $jobs = $this->jobRepo->all();
        $exigencies = $this->exigencyRepo->all();
        $levels = $this->levelRepo->all();
        $foreignLanguages = $this->foreignLanguageRepo->all();
        $provinces = $this->provinceRepo->all();
        $employmentStatuses = $this->employmentStatusRepo->all();

        // get method
        if ($request->isMethod('get')) {
            $candidate = new Candidate;

            return view('front/candidate/candidate_form')
                ->with('candidate', $candidate)
                ->with('salaries', 	$salaries)
                ->with('experienceYears', $experienceYears)
                ->with('ranks', $ranks)
                ->with('jobs', 	$jobs)
                ->with('exigencies', $exigencies)
                ->with('levels', $levels)
                ->with('foreignLanguages', $foreignLanguages)
                ->with('provinces', $provinces)
                ->with('employmentStatuses', $employmentStatuses);
        } else {
            // get form input data
            $input = $request->all();

            $candidate = new Candidate;

            $candidate->save();

            return redirect(route('candidate.form'));
        }
    }

    /**
     * Delete a candidate
     *
     * @param Request $request
     * @param $id
     * @return array
     */
    public function delete(Request $request, $id) {

        $data = [];

        if ($request->ajax()) {

            Candidate::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
    }
}
