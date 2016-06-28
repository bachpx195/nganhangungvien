<?php namespace App\Http\Controllers\Front;

use App\Helpers\FileHelper;
use App\Http\Requests;
use App\Http\Response;
use App\Model\User;
use App\Repositories\ICandidateRepo;
use App\Repositories\ICompanySizeRepo;
use App\Repositories\IConfigRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IUserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Validator;
use Auth;

class ResetPasswordController extends BaseController {

    private $userRepo;

    public function __construct(
        IUserRepo $userRepo,
        IProvinceRepo $provinceRepo,
        ICandidateRepo $candidateRepo,
        IConfigRepo $configRepo,
        Guard $auth
    )
    {
        parent::__construct($candidateRepo, $provinceRepo, $configRepo);
        $this->userRepo = $userRepo;
        $this->auth = $auth;
    }

    /**
     * Register employer
     *
     * @return \Illuminate\View\View
     */

    public function resetPassword(Request $request){
        if ($request->isMethod('post')) {
            $input = $request->all();
            $userEmail = $input['emailUsername'];
            $user = $this->userRepo->findByEmail($userEmail);
            if (!$user) {
                return response()->json(['status' => false, 'message' => 'Email của bạn không tồn tại!']);
            }
            if ($user->status == '0') {
                return response()->json(['status' => false, 'message' => 'Tài khoản chưa được kích hoạt!']);
            }
            if(!$user->confirmation_code){
	            $confirmation_code = str_random(30);
	            $user->confirmation_code = $confirmation_code;
	            $user->save();
	        }
            $input['code'] = $user->confirmation_code;
            $input['id'] = $user->id;
            $this->sendEmail($input);
            return response()->json(['status' => true, 'message' => '']);
        }
    }
    private function sendEmail($data)
    {
	    Mail::send('front.emails.reset_password', $data, function ($message) use ($data) {
        $message->subject('[EMAIL] Hướng dẫn tạo lại mật khẩu')
            ->to($data['emailUsername']);
        });
    }
    public function confirm($id,$code, Request $request)
    {
    	$this->auth->logout();
        if ($request->isMethod('get')) {
            
        	$user = User::find($id);
	        $countData=[];
	        $countData['all'] = $this->candidateRepo->countAllStatistic();
	        $countData['rencent'] = $this->candidateRepo->countRecentStatistic();
	        $countData['new'] = $this->candidateRepo->countNewStatistic();
            return view('front.account.employer_reset_password')
            			->with('countData',$countData)
                        ->with('user', $user);
        }else {

            // get form input data
            $input = $request->all();

            $user = User::find($id);
            if (!$user) {
                return response()->json(['status' => false, 'message' => 'Email của bạn không tồn tại!']);
            }
            if( strcmp($user->confirmation_code, $code) == '0'){
	            $user->password = Hash::make($input['txt_password']);
	            $user->save();
	            return response()->json(['status' => true, 'message' => 'Bạn đã tạo mới mật khẩu thành công!']);
            }else{
	            return response()->json(['status' => false, 'message' => 'Vui lòng kiểm tra lại đường link liên kết trong email của bạn!']);           	
            }

        }
    }

}
