<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\IExigencyRepo;
use App\Model\Exigency;
use Validator;

class ExigencyController extends Controller {

	public function __construct(IExigencyRepo $exigencyRepo) {
		$this->exigencyRepo = $exigencyRepo;
	}

	public function exigencyList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
		$name 		= $request->input('name');
		$exigencyList 	= $this->exigencyRepo->all();

		return view('admin.exigency.list')
					->with('exigencyList', 	$exigencyList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::EXIGENCY_LIST_PT);
	}

	public function exigencyForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::EXIGENCY_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$exigency = Exigency::find($request->get('id'));
			} else {
				$exigency = new Exigency();
			}
				
			return view('admin.exigency.exigency_form')
	               		->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle)
						->with('exigency', 	$exigency);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$exigency = Exigency::find($request->get('id'));
				$exigency->name = $input['name'];
				
				$exigency->save();
			} else {
				
				$validator = $this->validatorExigency($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$exigency = new Exigency;
				$exigency->name = $input['name'];
				
				$exigency->save();
			}
			
			return redirect(route('admin.exigency.list'));
		}
	}

	public function validatorExigency(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:exigency',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Exigency::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
