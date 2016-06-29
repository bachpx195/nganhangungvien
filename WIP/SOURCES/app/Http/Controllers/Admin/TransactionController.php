<?php namespace App\Http\Controllers\Admin;

use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\ITransactionRepo;
use App\Services\Registrar;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

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

        return view('admin/transaction/list')
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::TRANSACTION_LIST);
    }

    /**
     * Get list transaction
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getList(Request $request)
    {
        $input = $request->all();

        $pageSize = $input['length'];
        $page = $input['page'];

        // force current page to 5
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });

        $transactions = $this->transactionRepo->search($input['params'], $pageSize);
        $total = $transactions->total();

        $list = [];
        foreach ($transactions as $index => $item) {
            $list[] = array(
                "id"                => $item->id,
                "username"          => $item->username,
                "company_name"      => $item->company_name,
                "candidate_path"    => route('candidate.profile', ['slug' => StringHelper::uri($item->cv_title), 'id' => $item->candidateId]),
                "payment_type"      => $item->payment_type,
                "cv_title"          => $item->cv_title,
                "candidateName"     => $item->candidateName,
                "created_at"        => date('d/m/Y H:i', strtotime($item->created_at)),
                "balance"           => number_format($item->balance, 0) . ' VNĐ',
                "amount"            => number_format($item->amount, 0) . ' VNĐ',
            );
        }

        return response()->json([
            "data" => $list,
            "total" => $total
        ]);
    }
}