<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Experience;
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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;
use DateTime;
use Exception;

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
     * @throws Exception
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
            if (!empty(Input::all())) {
                $candidate = Input::all();
            } else {
                $candidate = new Candidate;
            }

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

            try {
                $validator = $this->validateGeneralInformation($request->all());
                //TODO: Move it in service or repository base
                DB::beginTransaction();
                if ($validator->fails()) {
                    $data = Input::except(array('_token', '_method'));
                    $data['email_errors'] = 'Email bạn nhập đã tồn tại';
                    return Redirect::route('candidate.form', $data);

                    //TODO: Research why validator errors not appearing laravel?
                    //return Redirect::route('candidate.form', $data)->withErrors($validator);
                }

                $candidate = new Candidate;
                $candidate = $this->getGeneralInfoByInput($candidate, $input);

                $candidate->save();
                if ($candidate->id) {
                    $candidate->candidate_code = self::PREFIX_CANDIDATE_CODE . $candidate->id;
                    $candidate->save();
                }

                //Save a experience
                $experienceCount = isset($input['experience_count']) ? $input['experience_count'] : 1;
                for ($i = 1; $i <= $experienceCount; $i++) {
                    $experience = new Experience();
                    $experience->candidate_id  = $candidate->id;
                    if ($this->canSaveExperience($input, $i)) {
                        $experience = $this->getExperienceInfo($experience, $input, $i);
                        $experience->save();
                    }
                }
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                //throw new Exception('Something wrong!!');
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
     * Can save a experience
     *
     * @param $experience
     * @param $index
     * @return bool
     */
    private function canSaveExperience($experience, $index) {
        if (!empty(trim($experience['experience_company_name_' . $index])) && !empty(trim($experience['experience_office_' . $index]))) {
            return true;
        }

        return false;
    }

    /**
     * Get experience info
     *
     * @param $experience
     * @param $input
     * @param $index
     */
    private function getExperienceInfo($experience, $input, $index)
    {
        $experience->company_name = $input['experience_company_name_' . $index];
        $experience->office = $input['experience_office_' . $index];
        $experience->salary = $input['experience_salary_' . $index];

        $dayInMonth = $input['experience_day_in_month_' . $index];
        $dayInYear = $input['experience_day_in_year_' . $index];
        $dayIn = new DateTime($dayInYear . '-' . $dayInMonth . '-01');
        $experience->day_in = $dayIn;

        $dayOutMonth = $input['experience_day_out_month_' . $index];
        $dayOutYear = $input['experience_day_out_year_' . $index];
        $dayOut = new DateTime($dayOutYear . '-' . $dayOutMonth . '-01');
        $experience->day_out = $dayOut;

        $experience->description = $input['experience_description_' . $index];

        return $experience;
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

        $candidate->sex = $input['sex'];
        $candidate->phone_number = $input['phone_number'];
        //$candidate->image
        $candidate->province_id = $input['province_id'];
        $candidate->is_married = $input['is_married'];
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

    /**
     * Validate for general information of the candidate
     * @param $data
     * @return mixed
     */
    private function validateGeneralInformation($data)
    {
        $birthdayYear = $data['birthday_year'];
        $birthdayMonth = $data['birthday_month'];
        $birthdayDay = $data['birthday_day'];
        $data['birthday'] = new DateTime($birthdayYear . '-' . $birthdayMonth . '-' . $birthdayDay);

        return Validator::make($data, [
            'email' => 'required|email|unique:candidate',
            'full_name' => 'required',
            'birthday' => 'required',
            'sex' => 'required',
            'phone_number' => 'required',
            //'image' => 'required',
            'province_id' => 'required',
            'current_rank' => 'required',
            'expect_rank' => 'required',
            'job' => 'required',
            //'address' => 'required',
            'level' => 'required',
            'experience_years' => 'required',
            'employment_status' => 'required',
            'expect_salary' => 'required',
            'job_goal' => 'required'
        ]);
    }
}
