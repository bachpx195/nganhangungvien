<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Libs\Constants;

use Illuminate\Http\Request;
use App\Repositories\IConfigRepo;
use App\Model\Config;
use Validator;

class ConfigController extends Controller {

public function __construct(IConfigRepo $configRepo) {
		$this->configRepo = $configRepo;
	}

	public function configList(Request $request) {
        $activeMenu = Constants::CONFIG;
		$name 		= $request->input('name');
		$configList 	= $this->configRepo->all();

		return view('admin.config.list')
					->with('configList', 	$configList)
					->with('name', $name)
					->with('activeMenu', $activeMenu)
					->with('pageTitle', Constants::CONFIG_LIST_PT);
	}

	public function configForm(Request $request) {
        $activeMenu = Constants::CONFIG;
        $pageTitle  = Constants::CONFIG_NEW_PT;
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$config = Config::find($request->get('id'));
			} else {
				$config = new Config();
			}
				
			return view('admin.config.config_form')
					->with('config', 	$config)
	                ->with('activeMenu', $activeMenu)
	                ->with('pageTitle', $pageTitle);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$config = Config::find($request->get('id'));
				$config->code = $input['code'];

				$config->value = $input['name'];
				
				$config->save();
			} else {
				
				// $validator = $this->validatorConfig($request->all());
		        $validator = Validator::make($request->all(), [
		        	'value' 		=> 'max:50|unique:config',
		        	'code' 		=> 'max:50|unique:config',
		        ]);
				if ($validator->fails()) {
						
            			$errors = $validator->errors()->all();
            			return redirect(route('admin.config.form'))
                        ->withErrors($validator)
                        ->withInput();
				}
				
				$config = new Config;
				$config->code = $input['code'];
				$config->value = $input['name'];
				$config->save();
			}
			
			return redirect(route('admin.config.list'));
		}
	}

	public function validatorConfig(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:config',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Config::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
