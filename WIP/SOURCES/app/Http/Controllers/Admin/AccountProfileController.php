<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Helpers\FileHelper;
use App\Http\Response;
use App\Repositories\ICandidateRepo;
use App\Repositories\ICompanySizeRepo;
use App\Repositories\IConfigRepo;
use App\Repositories\IEmployerRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IUserRepo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Validator;
use Auth;

class AccountProfileController extends Controller {

    private $userRepo;

    public function __construct(
        IUserRepo $userRepo
    )
    {
        $this->userRepo = $userRepo;
        $this->middleware('auth');
    }
  public function changeAccountPassword(Request $request)
    {
        if ($request->isMethod('post')) {

            // $userId = Auth::user()->id;

            // $user = $this->userRepo->findById($userId);
            // if (!$user) {
            //     return response()->json(['status' => false, 'message' => 'Không tìm thấy thông tin đăng nhập']);
            // }
            // $oldPassword = $input['oldPassword'];
            // if (!Hash::check("$oldPassword",  "$user->password")) {
            //     return response()->json(['status' => false, 'message' => 'Mật khẩu cũ không đúng']);
            // }
            // // save password
            // $user->password = Hash::make($input['newPassword']);
            // $user->save();

            // return response()->json(['status' => true, 'message' => 'Đổi mật khẩu thành công']);
        }else{
        	return view('admin.account.change_admin_password');
        }
    }

}
