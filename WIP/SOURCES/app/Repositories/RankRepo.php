<?php namespace App\Repositories;

use App\Model\Rank;

class RankRepo implements IRankRepo {
    
    public function all() {

        return Rank::orderBy('id', 'dec')->get();
    }

    public function filter($name) {
	
		$query = Rank::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}