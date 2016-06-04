<?php namespace App\Repositories;

use App\Model\CompanySize;

class CompanySizeRepo implements ICompanySizeRepo {
    
    public function all() {

        return CompanySize::orderBy('id', 'dec')->get();
    }

    public function filter($name) {
	
		$query = CompanySize::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}