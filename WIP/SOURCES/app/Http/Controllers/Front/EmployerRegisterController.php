<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Model\Employer;
use App\Model\User;
use App\Repositories\ICandidateRepo;
use App\Repositories\ICompanySizeRepo;
use App\Repositories\IConfigRepo;
use App\Repositories\IProvinceRepo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Validator;
use Crypt;


class EmployerRegisterController extends BaseController
{
    const DEFAULT_STATUS = 0;

    private $companySizeRepo;

    public function __construct(
        IProvinceRepo $provinceRepo,
        ICandidateRepo $candidateRepo,
        ICompanySizeRepo $companySizeRepo,
        IConfigRepo $configRepo
    )
    {
        parent::__construct($candidateRepo, $provinceRepo, $configRepo);
        $this->companySizeRepo = $companySizeRepo;
    }

    /**
     * Register employer
     *
     * @return \Illuminate\View\View
     */
    public function register(Request $request)
    {
        if ($request->session()->has('user')){
            $user = $request->session()->get('user');
            $request->session()->flush();

            return view('front.account.employer_register_success')
                ->with('user', $user);
        }

        if ($request->isMethod('GET')) {

            if (!empty(Input::all())) {
                $employer = Input::all();
            } else {
                $employer = new Employer();
            }

            $provinces = $this->provinceRepo->getSortedList();
            $companySizes = $this->companySizeRepo->all();

            return view('front.account.employer_register')
                ->with('provinces', $provinces)
                ->with('companySize', $companySizes)
                ->with('employer', $employer);

        } else if ($request->isMethod('POST')) {
            $input = $request->all();

            try {
                $validator = $this->validateGeneralInformation($input);

                if ($validator->fails()) {

                    return Redirect::back()->withErrors($validator)->withInput();

                }

                DB::beginTransaction();

                $confirmation_code = str_random(30);
                $user = new User;
                $this->mapUser($user, $input,$confirmation_code);
                $user->save();

                $employer = new Employer;
                $employer = $this->getGeneralInfoByInput($employer, $input);
                $employer->user_id = $user->id;

                $employer->save();

                DB::commit();

                $input['code'] = $confirmation_code;
                $input['id'] = $user->id;

                // echo "<pre>";
                // print_r($data);
                // echo "<pre>";
                // die();
                //send email
                $this->sendEmail($input);

                //Auth::attempt(['email' => $user->email, 'password' => $user->password]);

            } catch (\Exception $e) {
                DB::rollBack();
                //die('false');
                throw new Exception($e);
            }

            //return redirect(route('user.account'));
            return Redirect::back()->with('user', $user);
        }
    }

    private function sendEmail($data)
    {

        Mail::send('front.emails.register', $data, function ($message) use ($data) {
            $message->subject('Đăng ký nhà tuyển dụng thành công')
                ->to($data['email']);
        });
    }

    /**
     * Map array to user object
     *
     * @param object $user
     * @param array $input
     */
    private function mapUser($user, $input, $confirmation_code)
    {   
        $user->username = $input['email'];
        $user->email = $input['email'];
        $user->full_name = $input['fullname'];
        $user->password = Hash::make($input['password']);
        $user->user_type = 'employer';
        $user->confirmation_code = $confirmation_code;
        $user->status = self::DEFAULT_STATUS;
    }

    /**
     * Get general info by input
     *
     * @param $employer
     * @param $input
     * @return mixed
     */
    private function getGeneralInfoByInput($employer, $input)
    {
        $employer->phone = $input['phone'];
        $employer->company_name = $input['company_name'];
        $employer->company_size = $input['company_size'];
        $employer->company_description = $input['company_description'];
        $employer->company_address = $input['company_address'];
        $employer->province_id = $input['province_id'];
        $employer->website = $input['website'];
        $employer->contact_person = $input['contact_person'];
        $employer->contact_phone = $input['contact_phone'];
        $employer->contact_email = $input['contact_email'];

        $employer->vip = 0;
        $employer->status = self::DEFAULT_STATUS;

        return $employer;
    }

    /**
     * Validate for general information of the candidate
     *
     * @param $data
     * @return mixed
     */
    private function validateGeneralInformation($data)
    {
        $messages = [
            'email.unique' => 'Email đã tồn tại trong hệ thống.',
            //'required' => 'Vui lòng điền các thông tin được yêu cầu.',
        ];

        return Validator::make($data, [
            'email' => 'required|email|unique:user',
            'fullname' => 'required',
            'password' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'phone' => 'required',
            'company_description' => 'required',
            'company_address' => 'required',
            'province_id' => 'required',
            'contact_person' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required',
            //'CaptchaCode'=> 'valid_captcha'
        ], $messages);
    }
    public function confirm($id,$confirmation_code, $password)
    {
        // if( ! $confirmation_code)
        // {
        //     throw new InvalidConfirmationCodeException;
        // }
        $user = User::find($id);
        $user->status = 1;
        // dd( $user->confirmation_code);
        // if ( ! $user)
        // {
        //     throw new InvalidConfirmationCodeException;
        // }
        if( $user->confirmation_code == $confirmation_code){
            $user->confirmation_code = null;
            $user->save();

            $employer = Employer::where('user_id','=',$id)->firstOrFail();
            $employer->status = 1;
            $employer->save();
        }
        // Flash::message('You have successfully verified your account.');

            $email = $user->email;
            $password = Crypt::decrypt($password);

        if (Auth::attempt(['email' => $email, 'password' => $password, 'status' => 1]))   {
            
            return redirect()->intended(route('user.actived',['id' => $id, 'confirmation_code' => $confirmation_code]));
        }else{
            return view('front.account.employer_register_success')->with('user', $user);
        }
    }
    public function confirmed($id,$confirmation_code){
        $user = User::find($id);
        $countData=[];
        $countData['all'] = $this->candidateRepo->countAllStatistic();
        $countData['rencent'] = $this->candidateRepo->countRecentStatistic();
        $countData['new'] = $this->candidateRepo->countNewStatistic();
        return view('front.verification.success')->with('countData',$countData)->with('user', $user);
    }
}