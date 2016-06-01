<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\IProvinceRepo;
use Illuminate\Http\Request;
use App\Model\Province;
use Validator;

class ProvinceController extends Controller {

	public function __construct(IProvinceRepo $provinceRepo) {
		$this->provinceRepo = $provinceRepo;
	}

	public function tinh(Request $request) {
	$name 		= $request->input('name');
	$provinceList 	= $this->provinceRepo->filter($name);
	$pagination 	= $provinceList->appends($request->all());

	return view('admin.province.list')
				->with('provinceList', 	$provinceList)
				->with('name', $name)
				->with('pagination', 	$pagination);
	}


	public function tinhForm(Request $request) {
	
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$province = Province::find($request->get('id'));
			} else {
				$province = new Province();
			}
				
			return view('admin.province.province_form')
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
