<?php namespace App\Repositories;

use App\Model\Exigency;

class ExigencyRepo implements IExigencyRepo {
    
    public function all() {

        return Exigency::orderBy('id', 'dec')->get();
    }

	public function filter($name) {

		$query = Exigency::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}