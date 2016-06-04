<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;
use App\Repositories\IProvinceRepo;
use Illuminate\Http\Request;
use App\Model\Province;
use Validator;

class ProvinceController extends Controller {

	public function __construct(IProvinceRepo $provinceRepo) {
		$this->provinceRepo = $provinceRepo;
	}

	public function tinh(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
		$name 		= $request->input('name');
		$provinceList 	= $this->provinceRepo->all();


		return view('admin.province.list')
					->with('provinceList', 	$provinceList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::PROVINCE_LIST_PT);
	}


	public function tinhForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::PROVINCE_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$province = Province::find($request->get('id'));
			} else {
				$province = new Province();
			}
				
			return view('admin.province.province_form')
	                	->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
						->with('province', 	$province);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$province = Province::find($request->get('id'));
				$province->name = $input['name'];
				
				$province->save();
			} else {
				
				$validator = $this->validatorProvince($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$province = new Province;
				$province->name = $input['name'];
				
				$province->save();
			}
			
			return redirect(route('admin.province.list'));
		}
	}

		public function validatorProvince(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:20|unique:province',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Province::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

}
