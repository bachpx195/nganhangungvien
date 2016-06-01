<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\IJobRepo;
use App\Model\Job;
use Validator;

class JobController extends Controller {

	public function __construct(IJobRepo $jobRepo) {
		$this->jobRepo = $jobRepo;
	}

	public function jobList(Request $request) {
		$name 		= $request->input('name');
		$jobList 	= $this->jobRepo->filter($name);
		$pagination 	= $jobList->appends($request->all());

		return view('admin.job.list')
					->with('jobList', 	$jobList)
					->with('name', $name)
					->with('pagination', 	$pagination);
	}

	public function jobForm(Request $request) {
	
		// get method
		if ($request->isMethod('get')) {
			
			if ($request->has('id')) {
					
				$job = Job::find($request->get('id'));
			} else {
				$job = new Job();
			}
				
			return view('admin.job.job_form')
						->with('job', 	$job);
		} else {
			
			// get form input data
			$input = $request->all();
			
			if ($request->has('id')) {
				
				$job = Job::find($request->get('id'));
				$job->name = $input['name'];
				
				$job->save();
			} else {
				
				$validator = $this->validatorJob($request->all());
				
				if ($validator->fails()) {
						
					$this->throwValidationException(
							$request, $validator
					);
				}
				
				$job = new Job;
				$job->name = $input['name'];
				
				$job->save();
			}
			
			return redirect(route('admin.job.list'));
		}
	}

	public function validatorJob(array $data)
	{
		return Validator::make($data, [
				'name' 		=> 'max:50|unique:job',
		]);
	}

	public function delete(Request $request, $id) { 
        $data = [];

        if ($request->ajax()) {

            Job::find($id)->delete();

            $data = ['status' => true, 'message' => ''];
        }

        return $data;
   }

}
