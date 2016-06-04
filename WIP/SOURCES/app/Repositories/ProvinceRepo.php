<?php namespace App\Repositories;

use App\Model\Province;
use DB;

class ProvinceRepo implements IProvinceRepo {

    public function all() {

        return Province::orderBy('id', 'dec')->get();
    }

    public function getSortedList(){
		$results = Province::select('id', 'name')
			->leftJoin(DB::raw('(SELECT province_id, COUNT(*) AS num_candidates FROM candidate GROUP BY province_id) c'), function($join)
			{
				$join->on('province.id', '=', 'c.province_id');
			})
			->orderBy('c.num_candidates', 'DESC')
			->get();

		//TODO: Research how it's not working
//    	$results = DB::select( DB::raw("SELECT id, name
//    			FROM province p
//    			LEFT JOIN (SELECT province_id, COUNT(*) AS num_candidates FROM candidate GROUP BY province_id) c
//    			ON p.id = c.province_id
//    			ORDER BY num_candidates DESC") );

    	return $results;
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