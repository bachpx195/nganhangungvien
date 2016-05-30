<?php namespace App\Repositories;

use App\Model\News;
use DB;

class NewRepo implements INewRepo {

    /**
     * Search candidates by list of attributes
     * - Title
     * - Image
     * - Description
     * - Content
     * - Link
     * - password
     *
     * @param $params
     * @param $offset
     * @param $limit
     */
    public function all(){
        return News::get();
    }

}