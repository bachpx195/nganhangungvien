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

class EmployerRegisterController extends BaseController
{
    const DEFAULT_STATUS = 1;

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

                $user = new User;
                $this->mapUser($user, $input);
                $user->save();

                $employer = new Employer;
                $employer = $this->getGeneralInfoByInput($employer, $input);
                $employer->user_id = $user->id;

                $employer->save();

                DB::commit();

                //send email
                $this->sendEmail($input);
                Auth::attempt(['email' => $user->email, 'password' => $user->password]);

            } catch (\Exception $e) {
                DB::rollBack();
                //die('false');
                throw new Exception($e);
            }

            return redirect(route('user.account'));
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
    private function mapUser($user, $input)
    {
        $user->username = $input['email'];
        $user->email = $input['email'];
        $user->full_name = $input['fullname'];
        $user->password = Hash::make($input['password']);
        $user->user_type = 'employer';
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

}