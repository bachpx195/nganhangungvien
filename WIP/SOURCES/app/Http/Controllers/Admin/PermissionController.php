<?php namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\IRoleRepo;
use App\Repositories\IUserRoleRepo;
use App\Services\Registrar;
use Auth;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    private $userRoleRepo;
    private $roleRepo;
    private $registrar;

    public function __construct(
        IUserRoleRepo $userRoleRepo,
        IRoleRepo $roleRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->userRoleRepo = $userRoleRepo;
        $this->roleRepo = $roleRepo;
    }

    public function userRoleList(Request $request)
    {
        $activeMenu = Constants::PERMISSION_LIST;
        if (!$this->isSuperAdmin($this->userRoleRepo)) {
            return redirect(route('admin.user.list'));
        }

        $userRoles = $this->userRoleRepo->getUserRolesByUserType(Constants::USER_TYPE_ADMIN);
        $roles = $this->roleRepo->all();

        return view('admin/permission/list')
            ->with('userRoles', $userRoles)
            ->with('roles', $roles)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::PERMISSION_LIST);
    }

    /**
     * Update role for user
     * @param Request $request
     * @return array
     */
    public function userRoleUpdate(Request $request)
    {
        $data = [];
        if (!$this->isSuperAdmin($this->userRoleRepo)) {
            return ['status' => false, 'message' => 'Bạn không được phép gán quyền'];
        }

        if ($request->ajax()) {
            if (!$request->has('userId') || !$request->has('roleId')) {
                $data = ['status' => false, 'message' => 'Not found user and role'];
            } else {
                $userId = $request->input('userId');
                $roleId = $request->input('roleId');
                $this->userRoleRepo->updateUserRole($userId, $roleId);
                $data = ['status' => true, 'message' => ''];
            }
        }

        return $data;
    }
}