<?php namespace App\Repositories;

interface IProvinceRepo
{
    public function all();
    
    /**
     * Get list of provinces but order by amount of cadidates
     * 
     * @author cuongnm
     */
    public function getSortedList();

   	public function filter($name);
}
