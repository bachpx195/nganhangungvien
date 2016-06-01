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

    public function search($params, $pageSize = 10) {
        $query = News::select();

        if(isset($params['title']) && $params['title']){
            $query = $query->where('title', '=', $params['title']);
        }

        if(isset($params['content']) && $params['content']){
            $query = $query->where('content', '=', $params['content']);
        }

        if(isset($params['description']) && $params['description']){
            $query = $query->where('description', '=', $params['description']);
        }

        if(isset($params['link']) && $params['link']){
            $query = $query->where('link', '=', $params['link']);
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