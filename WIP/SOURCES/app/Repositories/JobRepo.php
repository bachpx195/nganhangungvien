<?php namespace App\Repositories;

use App\Model\Job;

class JobRepo implements IJobRepo {
    
    public function all() {

        return Job::get();
    }

    public function filter($name) {
	
		$query = Job::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}