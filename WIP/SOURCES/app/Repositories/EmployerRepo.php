<?php namespace App\Repositories;

use App\Model\Employer;
use DB;

class EmployerRepo implements IEmployerRepo
{

    /**
     * {@inheritDoc}
     */
    public function search($keyword, $pageSize = 10)
    {
        $query = Employer::select();

        if ($keyword) {
            $query = $query->where('company_name', 'LIKE', '%' . $keyword . '%')
                ->orwhere('phone', 'LIKE', '%' . $keyword . '%');
//            $query = $query->where('phone', 'LIKE', '%' . $keyword . '%');
//            $query = $query->user->where('username', 'LIKE', '%' . $keyword . '%');
        }

        return $query->paginate($pageSize);
    }

    /**
     * {@inheritDoc}
     */
    public function updateStatus($id, $status)
    {
        $employer = Employer::find($id);
        if (!$employer) {
            return false;
        }
        $employer->status = $status;
        $employer->save();
        return true;
    }
}