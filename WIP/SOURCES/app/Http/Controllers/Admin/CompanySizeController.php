<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\ICompanySizeRepo;
use App\Model\CompanySize;
use Validator;

class CompanySizeController extends Controller {

public function __construct(ICompanySizeRepo $companysizeRepo) {
		$this->companysizeRepo = $companysizeRepo;
	}

	public function companysizeList(Request $request) {
		$name 		= $request->input('name');
		$companysizeList 	= $this->companysizeRepo->filter($name);
		$pagination 	= $companysizeList->appends($request->all());

		return view('admin.companysize.list')
					->with('companysizeList', 	$companysizeList)
					->with('name', $name)
					->with('pagination', 	$pagination);
	}

	public function companysizeForm(Request $request) {
	
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$companysize = CompanySize::find($request->get('id'));
			} else {
				$companysize = new CompanySize();
			}
				
			return view('admin.companysize.companysize_form')
						->with('companysize', 	$companysize);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$companysize = CompanySize::find($request->get('id'));
				$companysize->name = $input['name'];
				
				$companysize->save();
			} else {
				
				// $validator = $this->validatorCompanySize($request->all());
		        $validator = Validator::make($request->all(), [
		        	'name' 		=> 'max:50|unique:company_size',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.companysize.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$companysize = new CompanySize;
				$companysize->name = $input['name'];
				
				$companysize->save();
			}
			
			return redirect(route('admin.companysize.list'));
		}
	}

	public function validatorCompanySize(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:company_size',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            CompanySize::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}