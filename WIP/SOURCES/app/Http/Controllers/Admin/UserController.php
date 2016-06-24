<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\IUserRepo;
use App\Services\Registrar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo;
    protected $registrar;

    public function __construct(
        IUserRepo $userRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->userRepo = $userRepo;
    }

    public function userList(Request $request)
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

    public function userFormCreate(Request $request)
    {
        if ($request->isMethod('get')) {
            $activeMenu = Constants::USER_FORM;

            return view('admin/transaction/list')
                ->with('transactions', $transactions)
                ->with('activeMenu', $activeMenu)
                ->with('pageTitle', Constants::TRANSACTION_LIST);
        } else {
            
        }
    }
}