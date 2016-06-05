<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\IEmploymentStatusRepo;
use App\Model\EmploymentStatus;
use Validator;

class EmploymentStatusController extends Controller {

	public function __construct(IEmploymentStatusRepo $employmentstatusRepo) {
		$this->employmentstatusRepo = $employmentstatusRepo;
	}

	public function employmentstatusList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $employmentstatusList 	= $this->employmentstatusRepo->all();

		return view('admin.employmentstatus.list')
					->with('employmentstatusList', 	$employmentstatusList)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::EMPLOYMENTSTATUS_LIST_PT);
	}

	public function employmentstatusForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::EMPLOYMENTSTATUS_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$employmentstatus = EmploymentStatus::find($request->get('id'));
			} else {
				$employmentstatus = new EmploymentStatus();
			}
				
			return view('admin.employmentstatus.employmentstatus_form')
		                ->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
						->with('employmentstatus', 	$employmentstatus);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$employmentstatus = EmploymentStatus::find($request->get('id'));
				$employmentstatus->name = $input['name'];
				
				$employmentstatus->save();
			} else {
				
				// $validator = $this->validatorEmploymentStatus($request->all());
		        $validator = Validator::make($request->all(), [
		        	'name' 		=> 'max:50|unique:employment_status',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.employmentstatus.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$employmentstatus = new EmploymentStatus;
				$employmentstatus->name = $input['name'];
				
				$employmentstatus->save();
			}
			
			return redirect(route('admin.employmentstatus.list'));
		}
	}

	public function validatorEmploymentStatus(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:experience_years',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            EmploymentStatus::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }


}
