<?php namespace App\Repositories;

use App\Model\Salary;

class SalaryRepo implements ISalaryRepo {

    public function all() {

        return Salary::orderBy('id', 'dec')->get();
    }

    public function filter($name) {
	
		$query = Salary::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}