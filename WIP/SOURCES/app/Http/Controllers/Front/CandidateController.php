<?php

namespace App\Http\Controllers\Front;

use App\Helpers\CandidateHelper;
use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Model\CandidateCertificate;
use App\Model\CandidateContactPerson;
use App\Model\CandidateForeignLanguage;
use App\Model\CandidateItLevel;
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
use App\Helpers\FileHelper;

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
        $activeHeaderMenu = Constants::CANDIDATE;

        $salaries = $this->salaryRepo->all();
        $experienceYears = $this->experienceYearsRepo->all();
        $ranks = $this->rankRepo->all();
        $jobs = $this->jobRepo->all();
        $exigencies = $this->exigencyRepo->all();
        $levels = $this->levelRepo->all();
        $foreignLanguages = $this->foreignLanguageRepo->all();
        $provinces = $this->provinceRepo->all();
        $employmentStatuses = $this->employmentStatusRepo->all();
        $graduationTypes = CandidateHelper::getGraduationTypes();
        $scales = CandidateHelper::getScales();

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
                ->with('employmentStatuses', $employmentStatuses)
                ->with('graduationTypes', $graduationTypes)
                ->with('scales', $scales)
                ->with('activeHeaderMenu', $activeHeaderMenu);
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

                    //TODO: Research why the validate errors not appearing laravel?
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
                $this->saveExperience($candidate, $input);

                //Save a certificate
                $this->saveCertificate($candidate, $input, $request);

                //Save a foreign languages
                $this->saveForeignLanguages($candidate, $input);

                //Save a IT level
                $this->saveITLevel($candidate, $input);

                //Save a contact persons
                $this->saveContactPersons($candidate, $input);
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
     * Save a contact persons
     *
     * @param $candidate
     * @param $input
     */
    private function saveContactPersons($candidate, $input)
    {
        $contactPersonCount = isset($input['contact_person_count']) ? $input['contact_person_count'] : 1;
        for ($i = 1; $i <= $contactPersonCount; $i++) {
            $contactPerson = new CandidateContactPerson();
            $contactPerson->candidate_id  = $candidate->id;
            if ($this->canSaveContactPerson($input, $i)) {
                $contactPerson = $this->getContactPersonInfo($contactPerson, $input, $i);
                $contactPerson->save();
            }
        }
    }

    /**
     * Get a contact person info
     *
     * @param $contactPerson
     * @param $input
     * @param $index
     * @return
     */
    private function getContactPersonInfo($contactPerson, $input, $index)
    {
        $contactPerson->full_name = $input['contact_person_full_name_' . $index];
        $contactPerson->company = isset($input['contact_person_company_' . $index]);
        $contactPerson->phone_number = isset($input['contact_person_phone_number_' . $index]);
        $contactPerson->office = isset($input['contact_person_office_' . $index]);

        return $contactPerson;
    }

    /**
     * Can save a contact person
     *
     * @param $contactPerson
     * @param $index
     * @return bool
     */
    private function canSaveContactPerson($contactPerson, $index) {
        if (!empty(trim($contactPerson['contact_person_full_name_' . $index])) && !empty(trim($contactPerson['contact_person_company_' . $index]))
        && !empty(trim($contactPerson['contact_person_phone_number_' . $index])) && !empty(trim($contactPerson['contact_person_office_' . $index]))) {
            return true;
        }

        return false;
    }

    /**
     * Save a IT level
     *
     * @param $candidate
     * @param $input
     */
    private function saveITLevel($candidate, $input)
    {
        $iTLevel = new CandidateItLevel();
        $iTLevel->candidate_id  = $candidate->id;
        if ($this->canSaveITLevel($input)) {
            $iTLevel = $this->getITLevelInfo($iTLevel, $input);
            $iTLevel->save();
        }
    }

    /**
     * Get IT level info
     *
     * @param $itLevel
     * @param $input
     * @return
     */
    private function getITLevelInfo($itLevel, $input)
    {
        $itLevel->word = isset($input['word']) ? $input['word'] : 0;
        $itLevel->excel = isset($input['excel']) ? $input['excel'] : 0;
        $itLevel->power_point = isset($input['power_point']) ? $input['power_point'] : 0;
        $itLevel->out_look = isset($input['out_look']) ? $input['out_look'] : 0;

        return $itLevel;
    }

    /**
     * Can save a IT level
     *
     * @param $itLevel
     * @return bool
     */
    private function canSaveITLevel($itLevel) {
        if (!empty(trim($itLevel['word'])) || !empty(trim($itLevel['excel']))
                || !empty(trim($itLevel['power_point'])) || !empty(trim($itLevel['out_look']))) {
            return true;
        }

        return false;
    }

    /**
     * Save foreign languages
     *
     * @param $candidate
     * @param $input
     */
    private function saveForeignLanguages($candidate, $input)
    {
        $languageCount = isset($input['language_count']) ? $input['language_count'] : 1;
        for ($i = 1; $i <= $languageCount; $i++) {
            $language = new CandidateForeignLanguage();
            $language->candidate_id  = $candidate->id;
            if ($this->canSaveLanguage($input, $i)) {
                $language = $this->getLanguageInfo($language, $input, $i);
                $language->save();
            }
        }
    }

    /**
     * Get language info
     *
     * @param $language
     * @param $input
     * @param $index
     * @return
     */
    private function getLanguageInfo($language, $input, $index)
    {
        $language->language_id = $input['language_id_' . $index];
        $language->read = isset($input['read_' . $index]) ? $input['read_' . $index] : 0;
        $language->write = isset($input['write_' . $index]) ? $input['write_' . $index] : 0;
        $language->listen = isset($input['listen_' . $index]) ? $input['listen_' . $index] : 0;
        $language->speak = isset($input['speak_' . $index]) ? $input['speak_' . $index] : 0;

        return $language;
    }

    /**
     * Can save a language
     *
     * @param $language
     * @param $index
     * @return bool
     */
    private function canSaveLanguage($language, $index) {
        if (!empty(trim($language['language_id_' . $index]))) {
            return true;
        }

        return false;
    }

    /**
     * Save certificates
     *
     * @param $candidate
     * @param $input
     * @param $request
     */
    private function saveCertificate($candidate, $input, $request)
    {
        $certificateCount = isset($input['certificate_count']) ? $input['certificate_count'] : 1;
        for ($i = 1; $i <= $certificateCount; $i++) {
            $certificate = new CandidateCertificate();
            $certificate->candidate_id  = $candidate->id;
            if ($this->canSaveCertificate($input, $i)) {
                $certificate = $this->getCertificateInfo($certificate, $input, $i, $request);
                $certificate->save();
            }
        }
    }

    /**
     * Get certificate info
     *
     * @param $certificate
     * @param $input
     * @param $index
     * @param $request
     * @return
     */
    private function getCertificateInfo($certificate, $input, $index, $request)
    {
        $certificate->certificate_name = $input['certificate_name_' . $index];
        $certificate->training_unit = $input['training_unit_' . $index];
        $certificate->graduation_type = $input['graduation_type_' . $index];
        $certificate->specialize = $input['specialize_' . $index];

        $candidateImgPath = FileHelper::getCandidateImgPath();
        $imageName = FileHelper::getNewFileName($index);

        if (!empty($request->file('certificate_image_' . $index))) {
            $imgExtension = $request->file('certificate_image_' . $index)->getClientOriginalExtension();
            $request->file('certificate_image_' . $index)->move($candidateImgPath, $imageName . '.' . $imgExtension);
            $certificate->image = $imageName . '.' . $imgExtension;

        }

        if (!empty($input['started_at_month_' . $index]) && !empty($input['started_at_year_' . $index])) {
            $startedMonth = $input['started_at_month_' . $index];
            $startedYear = $input['started_at_year_' . $index];
            $started = new DateTime($startedYear . '-' . $startedMonth . '-01');
            $certificate->started_at = $started;
        }

        if (!empty($input['ended_at_month_' . $index]) && !empty($input['ended_at_year_' . $index])) {
            $endedMonth = $input['ended_at_month_' . $index];
            $endedYear = $input['ended_at_year_' . $index];
            $ended = new DateTime($endedYear . '-' . $endedMonth . '-01');
            $certificate->ended_at = $ended;
        }

        return $certificate;
    }

    /**
     * Can save a certificate
     *
     * @param $certificate
     * @param $index
     * @return bool
     */
    private function canSaveCertificate($certificate, $index) {
        if (!empty(trim($certificate['certificate_name_' . $index])) && !empty(trim($certificate['certificate_name_' . $index]))) {
            return true;
        }

        return false;
    }

    /**
     * Save experiences
     *
     * @param $candidate
     * @param $input
     */
    private function saveExperience($candidate, $input)
    {
        $experienceCount = isset($input['experience_count']) ? $input['experience_count'] : 1;
        for ($i = 1; $i <= $experienceCount; $i++) {
            $experience = new Experience();
            $experience->candidate_id  = $candidate->id;
            if ($this->canSaveExperience($input, $i)) {
                $experience = $this->getExperienceInfo($experience, $input, $i);
                $experience->save();
            }
        }
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

        if (!empty($input['experience_day_in_month_' . $index]) && !empty($input['experience_day_in_year_' . $index])) {
            $dayInMonth = $input['experience_day_in_month_' . $index];
            $dayInYear = $input['experience_day_in_year_' . $index];
            $dayIn = new DateTime($dayInYear . '-' . $dayInMonth . '-01');
            $experience->day_in = $dayIn;
        }

        if (!empty($input['experience_day_out_month_' . $index]) && !empty($input['experience_day_out_year_' . $index])) {
            $dayOutMonth = $input['experience_day_out_month_' . $index];
            $dayOutYear = $input['experience_day_out_year_' . $index];
            $dayOut = new DateTime($dayOutYear . '-' . $dayOutMonth . '-01');
            $experience->day_out = $dayOut;
        }

        $experience->description = $input['experience_description_' . $index];

        return $experience;
    }

    /**
     * Get general info by input
     *
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
        $candidate->skill_forte = $input['skill_forte'];

        $candidate->view_total = 0;
        $candidate->status = self::DEFAULT_STATUS;

        return $candidate;
    }

    /**
     * Validate for general information of the candidate
     *
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
