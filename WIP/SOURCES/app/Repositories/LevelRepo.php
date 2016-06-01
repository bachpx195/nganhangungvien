<?php namespace App\Repositories;

use App\Model\Level;

class LevelRepo implements ILevelRepo {
    
    public function all() {

        return Level::get();
    }

    public function filter($name) {
	
		$query = Level::select();
		
		if ($name != null) {
			$query = $query->where('name', 'like', '%' . $name . '%');
		}
		
		return $query->orderBy('id', 'dec')
					->paginate();
	}
}