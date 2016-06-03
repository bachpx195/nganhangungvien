<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\CandidateHelper;
use App\Http\Controllers\Controller;
use App\Model\CandidateCertificate;
use App\Model\CandidateContactPerson;
use App\Model\CandidateForeignLanguage;
use App\Model\CandidateItLevel;
use App\Model\Experience;
use App\Repositories\ICandidateCertificateRepo;
use App\Repositories\ICandidateForeignLanguageRepo;
use App\Repositories\IContactPersonRepo;
use App\Repositories\IEmploymentStatusRepo;
use App\Repositories\IExigencyRepo;
use App\Repositories\IExperienceRepo;
use App\Repositories\IExperienceYearsRepo;
use App\Repositories\IForeignLanguageRepo;
use App\Repositories\IITLevelRepo;
use App\Repositories\IJobRepo;
use App\Repositories\ILevelRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IRankRepo;
use App\Repositories\ISalaryRepo;
use App\Libs\Constants;
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
    protected $experienceRepo;
    protected $certificateRepo;
    protected $itLevelRepo;
    protected $candidateForeignLanguageRepo;
    protected $contactPersonRepo;

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
     * @param IExperienceRepo $experienceRepo
     * @param ICandidateCertificateRepo $certificateRepo
     * @param IITLevelRepo $itLevelRepo
     * @param ICandidateForeignLanguageRepo $candidateForeignLanguageRepo
     * @param IContactPersonRepo $contactPersonRepo
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
        Registrar $registrar,
        IExperienceRepo $experienceRepo,
        ICandidateCertificateRepo $certificateRepo,
        IITLevelRepo $itLevelRepo,
        ICandidateForeignLanguageRepo $candidateForeignLanguageRepo,
        IContactPersonRepo $contactPersonRepo
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
        $this->experienceRepo = $experienceRepo;
        $this->certificateRepo = $certificateRepo;
        $this->itLevelRepo = $itLevelRepo;
        $this->candidateForeignLanguageRepo = $candidateForeignLanguageRepo;
        $this->contactPersonRepo = $contactPersonRepo;
    }

    /**
     * Index page
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function candidateList(Request $request)
    {
        $activeMenu = Constants::CANDIDATE;
        $params = $request->all();

        $pageSize = config('front.pageSize');
        $candidates = $this->candidateRepo->search($params, $pageSize);

        return view('admin/candidate/list')
            ->with('candidates', $candidates)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::CANDIDATE_LIST_PT);
    }

    /**
     * Create a new candidate
     *
     * @param Request $request
     * @return mixed
     */
    public function candidateCreate(Request $request) {
        if (!empty(Input::all())) {
            $candidate = Input::all();
        } else {
            $candidate = new Candidate;
        }
        $pageTitle = Constants::CANDIDATE_NEW_PT;

        return $this->candidateForm($candidate, $request, $pageTitle);
    }

    /**
     * Update a candidate
     * 
     * @param Request $request
     * @param int $id
     * @return mixed
     */
    public function candidateUpdate(Request $request, $id) {
        $pageTitle = Constants::CANDIDATE_UPDATE_PT;
        $candidate = Candidate::find($id);
        $candidate = $this->prepareCandidateData($candidate);

        return $this->candidateForm($candidate, $request, $pageTitle);
    }

    /**
     * Build a candidate's form
     *
     * @param $candidate
     * @param Request $request
     * @param $pageTitle
     * @return mixed
     */
    public function candidateForm($candidate, $request, $pageTitle) {
        $activeMenu = Constants::CANDIDATE;

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
            return view('admin/candidate/candidate_form')
                ->with('candidate', $candidate)
                ->with('salaries',  $salaries)
                ->with('experienceYears', $experienceYears)
                ->with('ranks', $ranks)
                ->with('jobs',  $jobs)
                ->with('exigencies', $exigencies)
                ->with('levels', $levels)
                ->with('foreignLanguages', $foreignLanguages)
                ->with('provinces', $provinces)
                ->with('employmentStatuses', $employmentStatuses)
                ->with('graduationTypes', $graduationTypes)
                ->with('scales', $scales)
                ->with('activeMenu', $activeMenu)
                ->with('pageTitle', $pageTitle);
        } else {
            // get form input data
            $input = $request->all();

            try {
                $validator = $this->validateGeneralInformation($request->all(), $candidate);
                //TODO: Move it in service or repository base
                DB::beginTransaction();
                if ($validator->fails()) {
                    $data = Input::except(array('_token', '_method'));
                    $data['email_errors'] = 'Email bạn nhập đã tồn tại';
                    if (empty($candidate->id)) {
                        return Redirect::route('admin.candidate.form', $data);
                    } else {
                        return Redirect::route('admin.candidate.update', $data);
                    }

                    //TODO: Research why the validate errors not appearing laravel?
                    //return Redirect::route('candidate.form', $data)->withErrors($validator);
                }

                if (empty($candidate->id)) {
                    $candidate = new Candidate();
                }

                $candidate = $this->getGeneralInfoByInput($candidate, $input);
                $candidate->save();
                if ($candidate->id && empty($candidate->candidate_code)) {
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

            if (empty($candidate->id)) {
                return redirect(route('admin.candidate.form'));
            } else {
                return redirect(route('admin.candidate.update', array('id' => $candidate->id)));
            }
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
     * Prepare candidate data
     *
     * @param mix $candidate
     * @return mixed
     */
    private function prepareCandidateData($candidate)
    {
        $birthDays = explode("-", $candidate['birthday']);

        $candidate['birthday_year'] = isset($birthDays[0]) ? $birthDays[0] : '';
        $candidate['birthday_month'] = isset($birthDays[1]) ? $birthDays[1] : '';
        $candidate['birthday_day'] = isset($birthDays[2]) ? $birthDays[2] : '';

        $experiences = $this->experienceRepo->getExperiencesByCandidateId($candidate->id);
        $this->populateExperiencesToCandidate($candidate, $experiences);

        $certificates = $this->certificateRepo->getCertificatesByCandidateId($candidate->id);
        $this->populateCertificatesToCandidate($candidate, $certificates);

        $foreignLanguages = $this->candidateForeignLanguageRepo->getForeignLanguagesByCandidateId($candidate->id);
        $this->populateForeignLanguagesToCandidate($candidate, $foreignLanguages);

        $itLevels = $this->itLevelRepo->getITLevelsByCandidateId($candidate->id);
        $this->populateITLevelsToCandidate($candidate, $itLevels);

        $contactPersons = $this->contactPersonRepo->getContactPersonsByCandidateId($candidate->id);
        $this->populateContactPersonsToCandidate($candidate, $contactPersons);

        return $candidate;
    }

    /**
     * Populate contact persons to candidate
     *
     * @param $candidate
     * @param $contactPersons
     * @return mixed
     */
    private function populateContactPersonsToCandidate($candidate, $contactPersons)
    {
        if (count($contactPersons) > 0) {
            for ($i = 0; $i < count($contactPersons);$i ++)
            {
                $candidate['full_name_' . ($i + 1)] = $contactPersons[$i]->full_name;
                $candidate['company_' . ($i + 1)] = $contactPersons[$i]->company;
                $candidate['phone_number_' . ($i + 1)] = $contactPersons[$i]->phone_number;
                $candidate['office_' . ($i + 1)] = $contactPersons[$i]->office;
            }
        }

        return $candidate;
    }

    /**
     * Populate it levels to candidate
     *
     * @param $candidate
     * @param $itLevels
     * @return mixed
     */
    private function populateITLevelsToCandidate($candidate, $itLevels)
    {
        for ($i = 0; $i < count($itLevels);$i ++)
        {
            $candidate['word_' . ($i + 1)] = $itLevels[$i]->word;
            $candidate['excel_' . ($i + 1)] = $itLevels[$i]->excel;
            $candidate['power_point_' . ($i + 1)] = $itLevels[$i]->power_point;
            $candidate['out_look_' . ($i + 1)] = $itLevels[$i]->out_look;
        }

        return $candidate;
    }


    /**
     * Populate it foreign languages to candidate
     *
     * @param $candidate
     * @param $foreignLanguages
     * @return mixed
     */
    private function populateForeignLanguagesToCandidate($candidate, $foreignLanguages)
    {
        if (count($foreignLanguages) > 0) {
            for ($i = 0; $i < count($foreignLanguages);$i ++)
            {
                $candidate['language_id_' . ($i + 1)] = $foreignLanguages[$i]->language_id;
                $candidate['read_' . ($i + 1)] = $foreignLanguages[$i]->read;
                $candidate['write_' . ($i + 1)] = $foreignLanguages[$i]->write;
                $candidate['listen_' . ($i + 1)] = $foreignLanguages[$i]->listen;
                $candidate['speak_' . ($i + 1)] = $foreignLanguages[$i]->speak;
            }
        }

        return $candidate;
    }

    /**
     * Populate certificates to candidate
     *
     * @param $candidate
     * @param $certificates
     * @return mixed
     */
    private function populateCertificatesToCandidate($candidate, $certificates)
    {
        if (count($certificates) > 0) {
            for ($i = 0; $i < count($certificates);$i ++)
            {
                $candidate['certificate_name_' . ($i + 1)] = $certificates[$i]->certificate_name;
                $candidate['training_unit_' . ($i + 1)] = $certificates[$i]->training_unit;
                $candidate['graduation_type_' . ($i + 1)] = $certificates[$i]->graduation_type;
                $candidate['specialize_' . ($i + 1)] = $certificates[$i]->specialize;

                $startedAts =  explode("-", $certificates[$i]->started_at);
                $candidate['started_at_month_' . ($i + 1)] = $startedAts[1];
                $candidate['started_at_year' . ($i + 1)] = $startedAts[0];

                $endedAts =  explode("-", $certificates[$i]->ended_at);
                $candidate['ended_at_month_' . ($i + 1)] = $endedAts[1];
                $candidate['ended_at_year_' . ($i + 1)] = $endedAts[0];
            }

            $candidate['certificate_count'] = count($certificates);
        }

        return $candidate;
    }

    /**
     * Populate experiences to candidate
     *
     * @param $candidate
     * @param $experiences
     * @return mixed
     */
    private function populateExperiencesToCandidate($candidate, $experiences)
    {
        if (count($experiences) > 0) {
            for ($i = 0; $i < count($experiences);$i ++)
            {
                $candidate['experience_company_name_' . ($i + 1)] = $experiences[$i]->company_name;
                $candidate['experience_office_' . ($i + 1)] = $experiences[$i]->office;
                $candidate['experience_salary_' . ($i + 1)] = $experiences[$i]->salary;
                $candidate['experience_description_' . ($i + 1)] = $experiences[$i]->description;

                $dayIns =  explode("-", $experiences[$i]->day_in);
                $candidate['experience_day_in_month_' . ($i + 1)] = $dayIns[1];
                $candidate['experience_day_in_year_' . ($i + 1)] = $dayIns[0];

                $dayOuts =  explode("-", $experiences[$i]->day_out);
                $candidate['experience_day_out_month_' . ($i + 1)] = $dayOuts[1];
                $candidate['experience_day_out_year_' . ($i + 1)] = $dayOuts[0];
            }

            $candidate['experience_count'] = count($experiences);
        }

        return $candidate;
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
        $contactPerson->full_name = isset($input['contact_person_full_name_' . $index]) ? $input['contact_person_full_name_' . $index] : '';
        $contactPerson->company = isset($input['contact_person_company_' . $index]) ? $input['contact_person_company_' . $index] : $input['contact_person_company_' . $index];
        $contactPerson->phone_number = isset($input['contact_person_phone_number_' . $index]) ? $input['contact_person_phone_number_' . $index] : '';
        $contactPerson->office = isset($input['contact_person_office_' . $index]) ? $input['contact_person_office_' . $index] : '';

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
        if (!empty($itLevel['word']) || !empty($itLevel['excel'])
            || !empty($itLevel['power_point']) || !empty($itLevel['out_look'])) {
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
        $certificate->certificate_name = isset($input['certificate_name_' . $index]) ? $input['certificate_name_' . $index] : '';
        $certificate->training_unit = isset($input['training_unit_' . $index]) ? $input['training_unit_' . $index] : '';
        $certificate->graduation_type = isset($input['graduation_type_' . $index]) ? $input['graduation_type_' . $index] : '';
        $certificate->specialize = isset($input['specialize_' . $index]) ? $input['specialize_' . $index] : '';

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
        $experience->company_name = isset($input['experience_company_name_' . $index]) ? $input['experience_company_name_' . $index] : '';
        $experience->office = isset($input['experience_office_' . $index]) ? $input['experience_office_' . $index] : '';
        $experience->salary = isset($input['experience_salary_' . $index]) ? $input['experience_salary_' . $index] : '';

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

        $experience->description = isset($input['experience_description_' . $index]) ? $input['experience_description_' . $index] : '';

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
     * @param $candidate
     * @return mixed
     */
    private function validateGeneralInformation($data, $candidate)
    {
        $birthdayYear = $data['birthday_year'];
        $birthdayMonth = $data['birthday_month'];
        $birthdayDay = $data['birthday_day'];
        $data['birthday'] = new DateTime($birthdayYear . '-' . $birthdayMonth . '-' . $birthdayDay);

        $validators = [
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
        ];

        if (!empty($candidate->id)) {
            $validators['email'] = 'required|email|unique:candidate';
        }

        return Validator::make($data, $validators);
    }
}
