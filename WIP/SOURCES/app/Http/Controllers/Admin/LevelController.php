<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\ILevelRepo;
use App\Model\Level;
use Validator;

class LevelController extends Controller {

	public function __construct(ILevelRepo $levelRepo) {
		$this->levelRepo = $levelRepo;
	}

	public function levelList(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
		$name 		= $request->input('name');
		$levelList 	= $this->levelRepo->all();

		return view('admin.level.list')
					->with('levelList', 	$levelList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::LEVEL_LIST_PT);
	}

	public function levelForm(Request $request) {
        $activeMenu = Constants::DATASYSTEM;
        $pageTitle  = Constants::LEVEL_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$level = Level::find($request->get('id'));
			} else {
				$level = new Level();
			}
				
			return view('admin.level.level_form')
						->with('level', 	$level)
	               		->with('activeMenu', $activeMenu)
	                	->with('pageTitle', $pageTitle);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$level = Level::find($request->get('id'));
				$level->name = $input['name'];
				
				$level->save();
			} else {
				
				$validator = $this->validatorLevel($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$level = new Level;
				$level->name = $input['name'];
				
				$level->save();
			}
			
			return redirect(route('admin.level.list'));
		}
	}

	public function validatorLevel(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:level',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Level::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
