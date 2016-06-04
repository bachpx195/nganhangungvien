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
        $query = Employer::leftJoin('users', 'employer.user_id', '=', 'users.id')
            ->select('employer.id', 'employer.company_name', 'employer.phone', 'employer.contact_person', 'employer.status', 'users.username');

        if ($keyword) {
            $query = $query->where('employer.company_name', 'LIKE', '%' . $keyword . '%')
                ->orwhere('employer.phone', 'LIKE', '%' . $keyword . '%')
                ->orwhere('users.username', 'LIKE', '%' . $keyword . '%');
        }

        return $query->paginate();
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