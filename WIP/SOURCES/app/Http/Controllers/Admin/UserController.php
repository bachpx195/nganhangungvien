<?php namespace App\Http\Controllers\Admin;


use App\Helpers\FileHelper;
use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Model\User;
use App\Repositories\IRoleRepo;
use App\Repositories\IUserRepo;
use App\Repositories\IUserRoleRepo;
use App\Services\Registrar;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Validator;

class UserController extends Controller
{
    protected $userRepo;
    protected $userRoleRepo;
    protected $roleRepo;
    protected $registrar;

    public function __construct(
        IUserRepo $userRepo,
        IUserRoleRepo $userRoleRepo,
        IRoleRepo $roleRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->userRepo = $userRepo;
        $this->userRoleRepo = $userRoleRepo;
        $this->roleRepo = $roleRepo;
    }

    /**
     * Get user list
     * @param Request $request
     * @return $this
     */
    public function userList(Request $request)
    {
        $activeMenu = Constants::TRANSACTION_LIST;

        return view('admin/users/list')
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::USER_LIST);
    }

    /**
     * Show page create new user
     * @param Request $request
     * @return Redirect
     */
    public function userFormRegister(Request $request)
    {
        if (!empty($request->all())) {
            $user = $request->all();
        } else {
            $user = new User();
        }
        $pageTitle = Constants::USER_FORM_ADD;

        return $this->userForm($user, $request, $pageTitle, null);
    }

    /**
     * Show page update user information
     * @param Request $request
     * @param $id user id
     * @return Redirect
     */
    public function userFormUpdate(Request $request, $id)
    {
        if (is_numeric($id)) {
            $pageTitle = Constants::USER_FORM;
            $user = User::find($id);

            return $this->userForm($user, $request, $pageTitle, $id);
        }
    }

    /**
     * Function handle register or update user information
     * @param $user user information
     * @param $request request
     * @param $pageTitle page title
     * @param null $id user id
     * @return $this|Redirect
     */
    private function userForm($user, $request, $pageTitle, $id = null)
    {
        $activeMenu = Constants::USER;

        // get method
        if ($request->isMethod('get')) {
            if (empty($id)) {
                $action = route('admin.user.register');
                $pageTitle = Constants::USER_FORM_ADD;
            } else {
                $action = route('admin.user.update', array('id' => $id));
                $pageTitle = Constants::USER_FORM;
            }
            return view('admin/users/user_form_register')
                ->with('user', $user)
                ->with('activeMenu', $activeMenu)
                ->with('pageTitle', $pageTitle)
                ->with('action', $action);
        } else {
            // get form input data
            $input = $request->all();

            $validator = $this->validateUserInformation($input, $id);
            if ($validator->fails()) {
                $data = Input::except(array('_token', '_method'));
                if (empty($id)) {
                    return Redirect::route('admin.user.register', $data)
                        ->withErrors($validator);
                } else {
                    return Redirect::route('admin.user.update', $data);
                }
            }

            if (empty($id)) {
                $user = new User();
                $user->password = Hash::make($input['password']);
                $user->status = 1;
                $user->username = $input['username'];
                $user->email = $input['email'];
                $user->user_type = 'admin';
            } else {
                $user = User::find($id);
            }
            $user->full_name = $input['full_name'];
            $user->phone_number = $input['phone_number'];
            if (!empty($request->file('logo'))) {
                $companyImgPath = FileHelper::getCompanyImgPath();
                $imageName = FileHelper::getNewFileName();
                $imgExtension = $request->file('logo')->getClientOriginalExtension();
                $request->file('logo')->move($companyImgPath, $imageName . '.' . $imgExtension);
                $user->image = FileHelper::getCompanyRelativePath() . $imageName . '.' . $imgExtension;
            }
            $user->save();

            if (empty($user->id)) {
                return redirect(route('admin.user.register'));
            } else {
                return redirect(route('admin.user.update', array('id' => $user->id)));
            }
        }
    }

    /**
     * Validate user information
     * @param $data data want to validate
     * @param $id user id
     * @return mixed
     */
    private function validateUserInformation($data, $id)
    {
        $validators = [
            'full_name' => 'required'
        ];

        if (!(isset($id) && $id)) {
            $validators['username'] = 'required|unique:user';
            $validators['email'] = 'required|email|unique:user';
        }

        return Validator::make($data, $validators);
    }

    /**
     * Get list user
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getList(Request $request)
    {
        $input = $request->all();

        $pageSize = $input['length'];
        $page = $input['page'];

        // force current page to 5
        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });

        $users = $this->userRepo->search($input['params'], $pageSize);
        $total = $users->total();

        $list = [];
        foreach ($users as $index => $item) {
            $list[] = array(
                "id" => $item->id,
                "username" => $item->username,
                "full_name" => $item->full_name,
                "email" => $item->email,
                "phone_number" => $item->phone_number,
                "status" => $item->status,
                "user_type" => $item->user_type,
                "create_at" => date('d/m/Y H:i', strtotime($item->created_at))
            );
        }

        return response()->json([
            "data" => $list,
            "total" => $total
        ]);
    }

    /**
     * Change user status
     * @param Request $request
     * @param $id employer id
     * @return result of update status
     */
    public function userStatus(Request $request, $id)
    {
        $data = [];

        if ($request->ajax()) {
            if (!$request->has('status')) {
                $data = ['status' => false, 'message' => 'Not found status'];
            } else {
                $status = $request->input('status');
                $success = $this->userRepo->updateStatus($id, $status);
                $data = ['status' => $success, 'message' => ''];
            }
        }

        return $data;
    }
}