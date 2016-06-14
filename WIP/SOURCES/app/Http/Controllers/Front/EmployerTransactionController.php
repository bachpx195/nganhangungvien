<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Repositories\ITransactionRepo;
use Illuminate\Http\Request;

class EmployerTransactionController extends BaseController
{
    protected $transactionRepo;

    public function __construct(
        ITransactionRepo $transactionRepo
    )
    {
        $this->transactionRepo = $transactionRepo;
    }

    /**
     * Get employer transaction
     * @param Request $request
     * @return $this
     */
    public function getEmployerTransaction(Request $request)
    {
        $start = 0;
        $limit = 3;
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $userId = 276;

            $transactions = $this->transactionRepo->findByUserId($userId, $start, $limit);
            if (!$transactions) {
                $transactions = [];
            }
            $start = $start + $limit;
            return view('front.account.employer_transaction')
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
        $limit = 3;
        if ($request->isMethod('get')) {
            $input = $request->all();
            if (isset($input['start'])) {
                $start = $input['start'];
            }
            if (isset($input['limit'])) {
                $limit = $input['limit'];
            }
            $userId = 276;
            $transactions = $this->transactionRepo->findByUserId($userId, $start, $limit);
            if (!$transactions) {
                $transactions = [];
            }
            return response()->json(['status' => true, 'transactions' => $transactions]);
        }
    }
}