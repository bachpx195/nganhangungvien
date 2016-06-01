<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ISalaryRepo;
use App\Model\Salary;
use Validator;

class SalaryController extends Controller {

public function __construct(ISalaryRepo $salaryRepo) {
		$this->salaryRepo = $salaryRepo;
	}

	public function salaryList(Request $request) {
		$name 		= $request->input('name');
		$salaryList 	= $this->salaryRepo->filter($name);
		$pagination 	= $salaryList->appends($request->all());

		return view('admin.salary.list')
					->with('salaryList', 	$salaryList)
					->with('name', $name)
					->with('pagination', 	$pagination);
	}

	public function salaryForm(Request $request) {
	
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$salary = Salary::find($request->get('id'));
			} else {
				$salary = new Salary();
			}
				
			return view('admin.salary.salary_form')
						->with('salary', 	$salary);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$salary = Salary::find($request->get('id'));
				$salary->name = $input['name'];
				
				$salary->save();
			} else {
				
				$validator = $this->validatorSalary($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
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
