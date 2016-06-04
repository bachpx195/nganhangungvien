<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\ISalaryRepo;
use App\Model\Salary;
use Validator;

class SalaryController extends Controller {

public function __construct(ISalaryRepo $salaryRepo) {
		$this->salaryRepo = $salaryRepo;
	}

	public function salaryList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
		$name 		= $request->input('name');
		$salaryList 	= $this->salaryRepo->filter($name);
		$pagination 	= $salaryList->appends($request->all());

		return view('admin.salary.list')
					->with('salaryList', 	$salaryList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::SALARY_LIST_PT)
					->with('pagination', 	$pagination);
	}

	public function salaryForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::SALARY_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$salary = Salary::find($request->get('id'));
			} else {
				$salary = new Salary();
			}
				
			return view('admin.salary.salary_form')
					->with('salary', 	$salary)
	                ->with('activeMenu', $activeMenu)
	                ->with('pageTitle', $pageTitle);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$salary = Salary::find($request->get('id'));
				$salary->name = $input['name'];
				
				$salary->save();
			} else {
				
				// $validator = $this->validatorSalary($request->all());
		        $validator = Validator::make($request->all(), [
		        	'name' 		=> 'max:50|unique:salary',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.salary.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$salary = new Salary;
				$salary->name = $input['name'];
				
				$salary->save();
			}
			
			return redirect(route('admin.salary.list'));
		}
	}

	public function validatorSalary(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:salary',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Salary::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
