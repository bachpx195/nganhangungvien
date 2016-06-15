<?php

namespace App\Http\Controllers\Front;

use App\Http\Requests;
use App\Http\Response;
use App\Repositories\ICandidateRepo;
use App\Repositories\ICompanySizeRepo;
use App\Repositories\IEmployerRepo;
use App\Repositories\IProvinceRepo;
use App\Repositories\IUserRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

class AccountProfileController extends BaseController
{
    private $employerRepo;
    private $userRepo;
    private $companySizeRepo;

    public function __construct(
        IEmployerRepo $employerRepo,
        IUserRepo $userRepo,
        IProvinceRepo $provinceRepo,
        ICandidateRepo $candidateRepo,
        ICompanySizeRepo $companySizeRepo
    )
    {
        parent::__construct($candidateRepo, $provinceRepo);
        $this->employerRepo = $employerRepo;
        $this->userRepo = $userRepo;
        $this->companySizeRepo = $companySizeRepo;
    }

    /**
     * Index page
     *
     * @return \Illuminate\View\View
     */
    public function manageAccountProfile(Request $request)
    {
        if ($request->isMethod('get')) {
            $employer = $this->employerRepo->findByUserId(276);
            if (!$employer) {
                return $this->errorView();
            }
            $provinces = $this->provinceRepo->getSortedList();
            $companySizes = $this->companySizeRepo->all();
            return view('front.account.employer_profile')
                ->with('employer', $employer)
                ->with('provinces', $provinces)
                ->with('companySizes', $companySizes);
        }
        return view('front/account/employer_profile');
    }

    /**
     * Change account password
     * @param Request $request
     * @throws Exception
     */
    public function changeAccountPassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $input = $request->all();
            try {
                $validator = $this->validateChangePassword($input);

                if ($validator->fails()) {
                    return response()->json(['status' => false, 'message' => $validator->messages()]);
                }
            } catch (\Exception $e) {
                throw new Exception($e);
            }
            $userId = $input['userId'];
            $user = $this->userRepo->findById($userId);
            if (!$user) {
                return response()->json(['status' => false, 'message' => 'Không tìm thấy thông tin đăng nhập']);
            }
            $hashOldPassword = Hash::make($input['oldPassword']);
            if (strcmp($user->password, $hashOldPassword) != 0) {
                return response()->json(['status' => false, 'message' => 'Mật khẩu cũ không đúng']);
            }
            // save pasword
            $user->password = Hash::make($input['newPassword']);
            $user->save();

            return response()->json(['status' => true, 'message' => 'Đổi mật khẩu thành công']);
        }
    }

    /**
     * Change company information
     * @param Request $request
     * @return mixed
     * @throws Exception
     */
    public function changeCompanyInformation(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $input = $request->all();
            try {
                $validator = $this->validateChangeCompanyInformation($input);

                if ($validator->fails()) {
                    return response()->json(['status' => false, 'message' => $validator->messages()]);
                }
            } catch (\Exception $e) {
                throw new Exception($e);
            }
            $employerId = $input['employer_id'];
            $employer = $this->employerRepo->findById($employerId);
            if (!$employer) {
                return response()->json(['status' => false, 'message' => 'Không tìm thấy thông tin nhà tuyển dụng']);
            }
            $employer->company_name = $input['company_name'];
            $employer->company_size = $input['company_size'];
            $employer->phone = $input['company_phone'];
            $employer->company_description = $input['company_description'];
            $employer->company_address = $input['company_address'];
            $employer->province_id = $input['province_id'];
            $employer->website = $input['website'];
            $employer->save();

            return response()->json(['status' => true, 'message' => 'Cập nhật thông tin nhà tuyển dụng thành công']);
        }
    }

    /**
     * Change employer contact person information
     * @param Request $request
     * @return mixed
     * @throws Exception
     */
    public function changeEmployerContactPersonInfo(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $input = $request->all();
            try {
                $validator = $this->validateContactPersonInformation($input);

                if ($validator->fails()) {
                    return response()->json(['status' => false, 'message' => $validator->messages()]);
                }
            } catch (\Exception $e) {
                throw new Exception($e);
            }
            $employerId = $input['employer_id'];
            $employer = $this->employerRepo->findById($employerId);
            if (!$employer) {
                return response()->json(['status' => false, 'message' => 'Không tìm thấy thông tin nhà tuyển dụng']);
            }
            $employer->contact_person = $input['contact_name'];
            $employer->contact_phone = $input['contact_phone'];
            $employer->contact_email = $input['contact_email'];
            $employer->save();

            return response()->json(['status' => true, 'message' => 'Cập nhật thông tin nhà tuyển dụng thành công']);
        }
    }

    /**
     * Validate change password data
     * @param $data
     * @return mixed
     */
    private function validateChangePassword($data)
    {
        return Validator::make($data, [
            'userId' => 'required',
            'oldPassword' => 'required',
            'newPassword' => 'required'
        ]);
    }

    /**
     * Validate change company information
     * @param $data
     */
    private function validateChangeCompanyInformation($data)
    {
        return Validator::make($data, [
            'employer_id' => 'required',
            'company_name' => 'required',
            'company_size' => 'required',
            'company_phone' => 'required',
            'company_description' => 'required',
            'company_address' => 'required',
            'province_id' => 'required'
        ]);
    }

    private function validateContactPersonInformation($data)
    {
        return Validator::make($data, [
            'contact_name' => 'required',
            'contact_phone' => 'required',
            'contact_email' => 'required'
        ]);
    }
}