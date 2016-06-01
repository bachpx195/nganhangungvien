<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\IRankRepo;
use App\Model\Rank;
use Validator;

class RankController extends Controller {

	public function __construct(IRankRepo $rankRepo) {
		$this->rankRepo = $rankRepo;
	}

	public function rankList(Request $request) {
		$name 		= $request->input('name');
		$rankList 	= $this->rankRepo->filter($name);
		$pagination 	= $rankList->appends($request->all());

		return view('admin.rank.list')
					->with('rankList', 	$rankList)
					->with('name', $name)
					->with('pagination', 	$pagination);
	}

	public function rankForm(Request $request) {
	
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$rank = Rank::find($request->get('id'));
			} else {
				$rank = new Rank();
			}
				
			return view('admin.rank.rank_form')
						->with('rank', 	$rank);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$rank = Rank::find($request->get('id'));
				$rank->name = $input['name'];
				
				$rank->save();
			} else {
				
				$validator = $this->validatorRank($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$rank = new Rank;
				$rank->name = $input['name'];
				
				$rank->save();
			}
			
			return redirect(route('admin.rank.list'));
		}
	}

	public function validatorRank(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:rank',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Rank::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
