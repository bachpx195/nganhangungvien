<?php 

namespace App\Http\Controllers\Front;

use App\Helpers\UserHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Repositories\IConfigRepo;
use App\Repositories\IEmployerRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\ISaveCvRepo;
use App\Repositories\ITransactionRepo;
use Illuminate\Http\Request;
use App\Model\Candidate;
use App\Repositories\ICandidateRepo;

class CandidateProfileController extends BaseController {

	private $employerRepo;
	private $saveCvRepo;
	private $transactionRepo;

	public function __construct(
		IEmployerRepo $employerRepo,
		ISaveCvRepo $saveCvRepo,
		IProvinceRepo $provinceRepo,
		ICandidateRepo $candidateRepo,
		IConfigRepo $configRepo,
		ITransactionRepo $transactionRepo
	)
	{
		parent::__construct($candidateRepo, $provinceRepo, $configRepo);
		$this->employerRepo = $employerRepo;
		$this->saveCvRepo = $saveCvRepo;
		$this->transactionRepo = $transactionRepo;
	}

	/**
	 * Index page
	 *
	 * @return \Illuminate\View\View
	 */
	public function index(Request $request, $slug, $id)
	{
		$candidate = Candidate::find($id);
		if(!$candidate){
			return $this->errorView();
		}
		
		$dropdownData = $this->dropdownData();

		$candidatesData = $this->candidatesData();

		$user = $this->getCurrentUser();
		$countSavedCv = 0;
		$showContact = false;
		$transactionCost = "";

		if ($user) {
			$employer = $this->employerRepo->findEmployerInfoByUserId($user->id);
			$countSavedCv = $this->saveCvRepo->countSavedCv($employer->id, $candidate->id);

			if(UserHelper::isVip($employer)){
				$showContact = true;
			}else{
				$countTransactions = $this->transactionRepo->countTrans($employer->id, $candidate->id);
				if($countTransactions > 0){
					$showContact == true;
				}else{
					$transactionCost = UserHelper::getTransactionCost($candidate->experienceYears->code);
				}
			}
		}
		
		$sameData=[];
		$sameData['exp'] = $this->candidateRepo->sameExpStatistic($id);
		$sameData['lvl'] = $this->candidateRepo->sameLvlStatistic($id);
		$sameData['savedCv'] = $countSavedCv;
		
		return view('front/profile/candidate')
				->with('candidate', $candidate)
				->with('dropdownData', $dropdownData)
				->with('candidatesData', $candidatesData)
				->with('sameData', $sameData)
				->with('showContact', $showContact)
				->with('transactionCost', $transactionCost);
	}

	public function viewContact(Request $request){
		
	}
	
}