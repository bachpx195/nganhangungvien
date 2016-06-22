<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\ITransactionRepo;
use App\Services\Registrar;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    protected $transactionRepo;
    protected $registrar;

    public function __construct(
        ITransactionRepo $transactionRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->transactionRepo = $transactionRepo;
    }

    public function transactionList(Request $request)
    {
        $activeMenu = Constants::TRANSACTION_LIST;
        $keyword = '';
        $pageSize = config('front.pageSize');
        $transactions = $this->transactionRepo->search($keyword, $pageSize);

        return view('admin/transaction/list')
            ->with('transactions', $transactions)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::TRANSACTION_LIST);
    }
}