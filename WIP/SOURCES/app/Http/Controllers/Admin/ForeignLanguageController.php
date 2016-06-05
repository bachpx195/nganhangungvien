<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\IForeignLanguageRepo;
use App\Model\ForeignLanguage;
use Validator;

class ForeignLanguageController extends Controller {

	public function __construct(IForeignLanguageRepo $foreignlanguageRepo) {
		$this->foreignlanguageRepo = $foreignlanguageRepo;
	}

	public function foreignlanguageList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $foreignlanguageList 	= $this->foreignlanguageRepo->all();

		return view('admin.foreignlanguage.list')
					->with('foreignlanguageList', 	$foreignlanguageList)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::FOREIGNLANGUAGE_LIST_PT);
	}

	public function foreignlanguageForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::FOREIGNLANGUAGE_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$foreignlanguage = ForeignLanguage::find($request->get('id'));
			} else {
				$foreignlanguage = new ForeignLanguage();
			}
				
			return view('admin.foreignlanguage.foreignlanguage_form')
		                ->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
						->with('foreignlanguage', 	$foreignlanguage);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$foreignlanguage = ForeignLanguage::find($request->get('id'));
				$foreignlanguage->name = $input['name'];
				
				$foreignlanguage->save();
			} else {
				
				// $validator = $this->validatorForeignLanguage($request->all());
		        $validator = Validator::make($request->all(), [
		        	'name' 		=> 'max:50|unique:foreign_language',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.foreignlanguage.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$foreignlanguage = new ForeignLanguage;
				$foreignlanguage->name = $input['name'];
				
				$foreignlanguage->save();
			}
			
			return redirect(route('admin.foreignlanguage.list'));
		}
	}

	public function validatorForeignLanguage(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:experience_years',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            ForeignLanguage::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }


}
