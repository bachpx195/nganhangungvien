<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\IExperienceYearsRepo;
use App\Model\ExperienceYears;
use Validator;

class ExperienceYearsController extends Controller {

	public function __construct(IExperienceYearsRepo $experienceyearsRepo) {
		$this->experienceyearsRepo = $experienceyearsRepo;
	}

	public function experienceyearsList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $experienceyearsList 	= $this->experienceyearsRepo->all();

		return view('admin.experienceyears.list')
					->with('experienceyearsList', 	$experienceyearsList)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::COMPANYSIZE_LIST_PT);
	}

	public function experienceyearsForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::EXPERIECEYEARS_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$experienceyears = ExperienceYears::find($request->get('id'));
			} else {
				$experienceyears = new ExperienceYears();
			}
				
			return view('admin.experienceyears.experienceyears_form')
		                ->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
						->with('experienceyears', 	$experienceyears);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$experienceyears = ExperienceYears::find($request->get('id'));
				$experienceyears->name = $input['name'];
				
				$experienceyears->save();
			} else {
				
				// $validator = $this->validatorExperienceYears($request->all());
		        $validator = Validator::make($request->all(), [
		        	'name' 		=> 'max:50|unique:company_size',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.experienceyears.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$experienceyears = new ExperienceYears;
				$experienceyears->name = $input['name'];
				
				$experienceyears->save();
			}
			
			return redirect(route('admin.experienceyears.list'));
		}
	}

	public function validatorExperienceYears(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:experience_years',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            ExperienceYears::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
