<?php namespace App\Repositories;

use App\Model\Employer;
use DB;

class EmployerRepo implements IEmployerRepo
{

    /**
     * {@inheritDoc}
     */
    public function search($params, $pageSize = 10)
    {
        $query = Employer::select();

        if (isset($params['employerName']) && $params['employerName']) {
            $query = $query->user->where('username', 'LIKE', '%' . $params['employerName'] . '%');
        }

        if (isset($params['companyName']) && $params['companyName']) {
            $query = $query->where('company_name', 'LIKE', '%' . $params['companyName'] . '%');
        }

        if (isset($params['phoneNumber']) && $params['phoneNumber']) {
            $query = $query->where('phone', 'LIKE', '%' . $params['phone'] . '%');
        }

        return $query->paginate($pageSize);
    }
}