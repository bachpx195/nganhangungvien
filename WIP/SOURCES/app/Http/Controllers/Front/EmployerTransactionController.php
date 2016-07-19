<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Repositories\ITransactionRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\IProvinceRepo;
use App\Repositories\IConfigRepo;
use App\Repositories\ICandidateRepo;

class EmployerTransactionController extends BaseController
{
    protected $transactionRepo;
    protected $candidateRepo, $provinceRepo, $configRepo;
    public function __construct(
        ITransactionRepo $transactionRepo,
        ICandidateRepo $candidateRepo,
        IProvinceRepo $provinceRepo,
        IConfigRepo $configRepo
    )
    {
        parent::__construct($candidateRepo, $provinceRepo, $configRepo);
        $this->transactionRepo = $transactionRepo;
    }

    /**
     * Get employer transaction
     * @param Request $request
     * @return $this
     */
    public function getEmployerTransaction(Request $request)
    {
        // dd("$this->linkYouTubeChanel");
        $start = 0;
        $limit = config('constants.TRANSACTION_LIMIT');
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $user = Auth::user();
            $transactions = $this->transactionRepo->findByUserId($user->id, $start, $limit);
            if (!$transactions) {
                $transactions = [];
            }
            $start = $start + $limit;
            return view('front.account.employer_transaction')
                ->with('linkYouTubeChanel', $this->linkYouTubeChanel)
                ->with('transactions', $transactions)
                ->with('start', $start)
                ->with('limit', $limit);
        }
    }

    /**
     * Load more transaction
     * @param Request $request
     * @return array|mixed
     */
    public function loadMoreTransaction(Request $request)
    {
        $start = 0;
        $limit = config('constants.TRANSACTION_LIMIT');
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $user = Auth::user();
            $transactions = $this->transactionRepo->findByUserId($user->id, $start, $limit);
            if (!$transactions) {
                $transactions = [];
            }
            return response()->json(['status' => true, 'transactions' => $transactions]);
        }
    }
}