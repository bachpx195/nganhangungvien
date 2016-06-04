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
        // TODO: Find error later
        /*$query = Employer::join('user', 'employer.user_id', '=', 'user.id')
            ->select('employer.id', 'employer.company_name', 'employer.phone', 'employer.contact_person', 'employer.status', 'user.username');

        if ($keyword) {
            $query = $query->where('employer.company_name', 'LIKE', '%' . $keyword . '%')
                ->orwhere('employer.phone', 'LIKE', '%' . $keyword . '%')
                ->orwhere('user.username', 'LIKE', '%' . $keyword . '%');
        }*/

        $query = DB::select(DB::raw('SELECT e.*, u.username FROM employer e JOIN user u ON e.user_id = u.id order by created_at desc'));

        return $query;
    }

    public function findById($id)
    {
        $query = DB::select(DB::raw('SELECT e.*, 
              c.name as companySize, 
              p.name as provinceName 
            FROM employer e 
            JOIN province p ON e.province_id = p.id 
            JOIN company_size c ON e.company_size = c.id 
            WHERE e.id = ' . $id))[0];

        return $query;
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