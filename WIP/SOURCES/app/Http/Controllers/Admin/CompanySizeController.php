<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\ICompanySizeRepo;
use App\Model\CompanySize;
use Validator;

class CompanySizeController extends Controller {

public function __construct(ICompanySizeRepo $companysizeRepo) {
		$this->companysizeRepo = $companysizeRepo;
	}

	public function companysizeList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
		$name 		= $request->input('name');
		$companysizeList 	= $this->companysizeRepo->all();

		return view('admin.companysize.list')
					->with('companysizeList', 	$companysizeList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::COMPANYSIZE_LIST_PT);
	}

	public function companysizeForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::COMPANYSIZE_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$companysize = CompanySize::find($request->get('id'));
			} else {
				$companysize = new CompanySize();
			}
				
			return view('admin.companysize.companysize_form')
		                ->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
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