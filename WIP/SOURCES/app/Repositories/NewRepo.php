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

    public function search($name, $pageSize = 10) {
        $query = News::select();

        if ($name != null) {

            $query = $query->where('title', 'like', '%' . $name . '%');

            echo "<pre>";
                print_r($query);
            echo "</pre>";
            
            $query = $query->where('content', 'like', '%' . $name . '%');

            $query = $query->where('description', 'like', '%' . $name . '%');

            $query = $query->where('link', 'like', '%' . $name . '%');

        }

        return $query->paginate($pageSize);

    }

    public function all(){
        return News::get();
    }

    public function findById($id) {
        return News::find($id);
    }
}