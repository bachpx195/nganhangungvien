<?php namespace App\Repositories;

use App\Model\Province;
use DB;

class ProvinceRepo implements IProvinceRepo {
    
    public function all() {

        return Province::get();
    }
    
    public function getSortedList(){
    	$results = DB::select( DB::raw("SELECT id, name 
    			FROM province p 
    			LEFT JOIN (SELECT province_id, COUNT(*) AS num_candidates FROM candidate GROUP BY province_id) c 
    			ON p.id = c.province_id  
    			ORDER BY num_candidates DESC") );
    	
    	return $results;
    }
}