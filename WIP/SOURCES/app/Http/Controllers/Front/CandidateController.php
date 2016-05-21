<?php

namespace App\Http\Controllers\Front;

use App\Helpers\DateTimeHelper;
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
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;

use App\Repositories\ICandidateRepo;
use App\Model\Candidate;
use Validator;
use DateTime;

class CandidateController extends Controller {

    const DEFAULT_STATUS = 1;
    const PREFIX_CANDIDATE_CODE = 'NTV';

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
    protected $registrar;

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
     * @param Registrar $registrar
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
        IEmploymentStatusRepo $employmentStatusRepo,
        Registrar $registrar
    ) {
        $this->registrar = $registrar;
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

            $validator = $this->validateGeneralInformation($request->all());

            if ($validator->fails()) {
                //return redirect(route('candidate.form'))->withErrors($validator, 'general_info');
            }

            $candidate = new Candidate;
            $candidate = $this->getGeneralInfoByInput($candidate, $input);

            $candidate->save();
            if ($candidate->id) {
                $candidate->candidate_code = self::PREFIX_CANDIDATE_CODE . $candidate->id;
                $candidate->save();
            }

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

    /**
     * @param $candidate
     * @param $input
     * @return mixed
     */
    private function getGeneralInfoByInput($candidate, $input)
    {
        $candidate->full_name = $input['full_name'];
        $candidate->email = $input['email'];

        $birthdayYear = $input['birthday_year'];
        $birthdayMonth = $input['birthday_month'];
        $birthdayDay = $input['birthday_day'];

        $date = new DateTime($birthdayYear . '-' . $birthdayMonth . '-' . $birthdayDay);
        $candidate->birthday = $date;
        //$candidate->birthday = DateTimeHelper::formatDate($birthdayYear . '-' . $birthdayMonth . '-' . $birthdayDay);

        //$candidate->sex
        $candidate->phone_number = $input['phone_number'];
        //$candidate->image
        $candidate->province_id = $input['province_id'];
        //$candidate->address = $input['address'];
        $candidate->cv_title = $input['cv_title'];
        $candidate->level = $input['level'];
        $candidate->experience_years = $input['experience_years'];
        $candidate->current_rank = $input['current_rank'];
        $candidate->expect_rank = $input['expect_rank'];

        $candidate->job = $input['job'];
        $candidate->expect_salary = $input['expect_salary'];
        $candidate->exigency = $input['exigency'];
        $candidate->job_goal = $input['job_goal'];

        $candidate->view_total = 0;
        $candidate->status = self::DEFAULT_STATUS;

        return $candidate;
    }

    private function validateGeneralInformation($data)
    {
        return Validator::make($data, [
            'email' => 'required|email',
            'full_name' => 'required',
            'birthday' => 'required',
            'sex' => 'required',
            'phone_number' => 'required',
            //'image' => 'required',
            'province_id' => 'required',
            'current_rank' => 'required',
            'expect_rank' => 'required',
            'job' => 'required',
            'address' => 'required',
            'level' => 'required',
            'experience_years' => 'required',
            'employment_status' => 'required',
            'expect_salary' => 'required',
            'job_goal' => 'required'
        ]);
    }
}
