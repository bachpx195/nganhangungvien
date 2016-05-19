<?php namespace App\Repositories;

use App\Model\Rank;

class RankRepo implements IRankRepo {
    
    public function all() {

        return Rank::get();
    }
}