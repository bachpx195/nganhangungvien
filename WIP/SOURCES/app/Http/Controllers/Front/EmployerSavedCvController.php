<?php namespace App\Http\Controllers\Front;

use App\Model\SaveCv;
use App\Repositories\IEmployerRepo;
use Illuminate\Http\Request;
use App\Repositories\ICandidateRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\ISaveCvRepo;

class EmployerSavedCvController extends BaseController
{
    private $employerRepo;
    private $saveCvRepo;

    public function __construct(
        IEmployerRepo $employerRepo,
        IProvinceRepo $provinceRepo,
        ICandidateRepo $candidateRepo,
        ISaveCvRepo $saveCvRepo
    )
    {
        parent::__construct($candidateRepo, $provinceRepo);
        $this->employerRepo = $employerRepo;
        $this->saveCvRepo = $saveCvRepo;
    }

    /**
     * Get all saved profile
     * @param Request $request
     * @return $this
     */
    public function getSavedProfiles(Request $request)
    {
        $start = 0;
        $limit = config('constants.SAVE_CV_LIMIT');
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $saveCvs = $this->getSaveCvs($start, $limit);
            $start = $start + $limit;
            return view('front.account.employer_saved_cv')
                ->with('saveCvs', $saveCvs)
                ->with('start', $start)
                ->with('limit', $limit);
        } else if ($request->isMethod('post')) {
            $candidateId = -1;
            if (isset($input['candidateId'])) {
                $candidateId = $input['candidateId'];
            }
            $user = $this->getCurrentUser();
            $employer = $this->employerRepo->findEmployerInfoByUserId($user->id);
            $savedCv = $this->saveCvRepo->getSavedCvByCandidateAndEmployer($employer->id, $candidateId);
            if ($savedCv) {
                // delete save cv
                $savedCv->forceDelete();
                return response()->json(['result' => 'DONE']);
            } else {
                $savedCv = new SaveCv();
                $savedCv->employer_id = $employer->id;
                $savedCv->candidate_id = $candidateId;
                $savedCv->create_at = date('yyyy-MM-dd H:i:s');
                $savedCv->updated_at = date('yyyy-MM-dd H:i:s');
                $savedCv->save();
                return response()->json(['result' => 'DONE']);
            }
        }
    }

    /**
     * Load more save csv
     * @param Request $request
     * @return array|mixed
     */
    public function loadMoreSavedCv(Request $request)
    {
        $start = 0;
        $limit = config('constants.SAVE_CV_LIMIT');
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $saveCvs = $this->getSaveCvs($start, $limit);
            return response()->json(['status' => true, 'saveCvs' => $saveCvs]);
        }
    }

    /**
     * Get save cv
     * @param $start
     * @param $limit
     * @return array|mixed
     */
    private function getSaveCvs($start, $limit)
    {
        $user = $this->getCurrentUser();
        $employer = $this->employerRepo->findEmployerInfoByUserId($user->id);
        $saveCvs = $this->saveCvRepo->getSavedCvByEmployerId($employer->id, $start, $limit);
        if (!$saveCvs) {
            $saveCvs = [];
        }
        return $saveCvs;
    }
}