<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Model\Role;
use App\Repositories\IRoleRepo;
use App\Services\Registrar;
use Illuminate\Http\Request;
use Validator;

class RoleController extends Controller
{
    private $roleRepo;
    private $registrar;

    public function __construct(
        IRoleRepo $roleRepo,
        Registrar $registrar
    )
    {
        $this->registrar = $registrar;
        $this->roleRepo = $roleRepo;
    }

    public function roleList(Request $request)
    {
        $activeMenu = Constants::ROLE_LIST;

        $roles = $this->roleRepo->all();
        return view('admin/role/list')
            ->with('roles', $roles)
            ->with('activeMenu', $activeMenu)
            ->with('pageTitle', Constants::ROLE_LIST);
    }

    public function updateRole(Request $request)
    {
        $activeMenu = Constants::ROLE_LIST;
        // get method
        if ($request->isMethod('get')) {
            $pageTitle  = Constants::ROLE_FORM_ADD;

            if ($request->has('id')) {
                $role = Role::find($request->get('id'));
            } else {
                $role = new Role();
            }

            return view('admin.role.role_form')
                ->with('activeMenu', $activeMenu)
                ->with('pageTitle', $pageTitle)
                ->with('role', 	$role);
        } else {
            $input = $request->all();

            if ($request->has('id')) {

                $role = Role::find($request->get('id'));
                $role->name = $input['name'];

                $role->save();
            } else {
                $validator = $this->validatorRole($input);
                if ($validator->fails()) {

                    $this->throwValidationException(
                        $request, $validator
                    );
                }

                $role = new Role();
                $role->name = $input['name'];
                $role->save();
            }
            return redirect(route('admin.role.list'));
        }
    }

    public function validatorRole($data)
    {
        return Validator::make($data, [
            'name' 		=> 'max:50',
        ]);
    }
}