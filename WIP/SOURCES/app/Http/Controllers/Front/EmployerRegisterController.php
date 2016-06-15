<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Employer;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

use Validator;
use DateTime;
use Exception;

class EmployerRegisterController extends BaseController
{
    const DEFAULT_STATUS = 1;

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

            return view('front.account.employer_register')
                ->with('provinces', $provinces)
                ->with('employer', $employer);

        } else if($request->isMethod('POST')){
            $input = $request->all();

            try {
                $validator = $this->validateGeneralInformation($input);

                if ($validator->fails()) {
                    $data = Input::except(array('_token', '_method', 'password', 'retype_password'));
                    $data['email_errors'] = 'Email bạn nhập đã tồn tại';

                    /*return Redirect::to('employer.register')
                        ->withErrors($validator);*/

                    return Redirect::route('employer.register', $data);

                    /*return Redirect::route('employer.register')
                        ->withErrors($errors)
                        ->withInput(Input::except(array('_token', '_method')));*/

                    //return Redirect::back()->withErrors($validator)->withInput();
                    /*return view('front.account.employer_register')
                        -> withInput();*/
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

            } catch (\Exception $e) {
                DB::rollBack();
                //die('false');
                throw new Exception($e);
            }

            return redirect(route('user.account'));
        }
    }

    private function sendEmail($data){
        
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
    private function mapUser($user, $input){
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
            'contact_email' => 'required'
        ]);
    }

}