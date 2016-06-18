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
        $query = Employer::join('user', 'employer.user_id', '=', 'user.id')
            ->join('province', 'employer.province_id', '=', 'province.id')
            ->join('company_size', 'employer.company_size', '=', 'company_size.id')
            ->select('employer.id', 'employer.company_name', 'employer.phone', 'employer.contact_person', 'employer.status', 'user.username', 'employer.created_at');

        if ($keyword) {
            $query = $query->where('company_name', 'LIKE', '%' . $keyword . '%')
                ->orwhere('phone', 'LIKE', '%' . $keyword . '%')
                ->orwhere('username', 'LIKE', '%' . $keyword . '%');
        }

        return $query->orderBy('created_at', 'desc')->get();
    }

    /**
     * {@inheritDoc}
     */
    public function findById($id)
    {
        $query = Employer::join('user', 'employer.user_id', '=', 'user.id')
            ->join('province', 'employer.province_id', '=', 'province.id')
            ->join('company_size', 'employer.company_size', '=', 'company_size.id')
            ->where('employer.id', '=', $id)
            ->select('employer.*', 'province.name as provinceName', 'company_size.name as companySize')
            ->first();

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

    /**
     * {@inheritDoc}
     */
    public function findByUserId($userId)
    {
        $query = Employer::join('user', 'employer.user_id', '=', 'user.id')
            ->join('province', 'employer.province_id', '=', 'province.id')
            ->join('company_size', 'employer.company_size', '=', 'company_size.id')
            ->where('user.id', '=', $userId)
            ->select('employer.*', 'user.id as userId', 'user.email as userEmail', 'province.name as provinceName', 'company_size.name as companySize')
            ->first();

        return $query;
    }

    /**
     * Find employer info by user id
     *
     * @param int $userId
     * @return Employer|null
     */
    public function findEmployerInfoByUserId($userId)
    {
        $query = Employer::join('user', 'employer.user_id', '=', 'user.id')
            ->where('user.id', '=', $userId)
            ->select('employer.*')
            ->first();

        return $query;
    }

    /**
     * Increase balance after payment
     *
     * @param int $userId
     * @param int $balance
     * {@inheritDoc}
     */
    public function increaseBalanceAfterPayment($userId, $balance)
    {
        $employer = Employer::where('user_id', '=', $userId)->first();

        if (!$employer) {
            return false;
        }

        $oldBalance = isset($employer->balance) ? $employer->balance : 0;
        $employer->balance = $oldBalance + $balance;
        $employer->save();

        return $employer;
    }
}