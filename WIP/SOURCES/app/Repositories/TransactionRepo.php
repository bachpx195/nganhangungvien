<?php
namespace App\Repositories;

use App\Model\Transaction;

class TransactionRepo implements ITransactionRepo
{

    /**
     * {@inheritDoc}
     */
    function findByUserId($userId, $start, $limit)
    {
        $query = Transaction::join('employer', 'transaction.employer_id', '=', 'employer.id')
            ->join('user', 'employer.user_id', '=', 'user.id')
            ->join('candidate', 'transaction.candidate_id', '=', 'candidate.id')
            ->where('user.id', '=', $userId)
            ->select('transaction.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName', 'candidate.cv_title')
            ->orderBy('transaction.created_at', 'desc')
            ->skip($start)
            ->take($limit)
            ->get();
        return $query;
    }

    /**
     * {@inheritDoc}
     */
    function search($params, $pageSize = 10)
    {
        $query = Transaction::join('employer', 'transaction.employer_id', '=', 'employer.id')
            ->join('candidate', 'transaction.candidate_id', '=', 'candidate.id')
            ->join('user', 'employer.user_id', '=', 'user.id')
            ->select('transaction.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName',
                'candidate.cv_title', 'user.username', 'user.email', 'employer.company_name');

        if (isset($params['employer_info']) && $params['employer_info']) {
            $query = $query->where(function ($query) use ($params) {
                $query->where('user.email', 'like', '%' . $params['employer_info'] . '%')
                    ->orWhere('employer.company_name', 'like', '%' . $params['employer_info'] . '%');
            });
        }
        if (isset($params['candidate_info']) && $params['candidate_info']) {
            $query = $query->where(function ($query) use ($params) {
                $query->where('candidate.full_name', 'like', '%' . $params['candidate_info'] . '%')
                    ->orWhere('candidate.email', 'like', '%' . $params['candidate_info'] . '%');
            });
        }

        $query = $query->orderBy('created_at', 'DESC');
        return $query->paginate($pageSize);
    }
}