<?php


namespace App\Helpers;

class FileHelper {

    /**
     * Get a new file name by index
     *
     * @param int $index
     * @return string
     */
    public static function getNewFileName($index = null)
    {
        if (empty($index)) {
            return date('YmdHis') . '-' . substr(microtime(), 2,3)  . rand(0, 100);
        } else {
            return date('YmdHis') . '-' . substr(microtime(), 2,3) . $index . rand(0, 100);
        }

    }

    /**
     * Get the path of candidate image
     */
    public static function getCandidateImgPath()
    {
        return public_path() . '/candidate/image/';
    }

     public static function getNewsImgPath()
    {
        return public_path() . '/news/images/';
    }
}