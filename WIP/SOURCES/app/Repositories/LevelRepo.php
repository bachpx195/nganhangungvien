<?php namespace App\Repositories;

use App\Model\Level;

class LevelRepo implements ILevelRepo {
    
    public function all() {

        return Level::get();
    }
}