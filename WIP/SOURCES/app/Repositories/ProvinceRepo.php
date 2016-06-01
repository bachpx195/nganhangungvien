<?php namespace App\Repositories;

use App\Model\Province;

class ProvinceRepo implements IProvinceRepo {
    
    public function all() {

        return Province::get();
    }

    public function filter($name) {
		
		$query = Province::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('updated_at', 'dec')
					->paginate();
	}
}