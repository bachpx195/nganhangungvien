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
    function search($keyword, $pageSize = 10)
    {
        /*$query = Transaction::join('employer', 'transaction.employer_id', '=', 'employer.id')
            ->join('candidate', 'transaction.candidate_id', '=', 'candidate.id')
            ->join('user', 'employer.user_id', '=', 'user.id')
            ->select('transaction.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName',
                'candidate.cv_title', 'user.username', 'employer.company_name');

        if (!empty($keyword))
        {
            $query = $query->where('user.username', 'like', '%' . $keyword . '%')
            ->orWhere('user.full_name', 'like', '%' . $keyword . '%')
            ->orWhere('user.email', '=', $keyword)
            ->orWhere('employer.company_name', 'like', '%' . $keyword . '$')
            ->orWhere('employer.phone', '=', $keyword);
        }

        $query = $query->orderBy('created_at', 'DESC');
        return $query->paginate($pageSize);*/

        $query = Transaction::join('employer', 'transaction.employer_id', '=', 'employer.id')
            ->join('candidate', 'transaction.candidate_id', '=', 'candidate.id')
            ->join('user', 'employer.user_id', '=', 'user.id')
//            ->where('user.username', 'like', '%' . $keyword . '%')
//            ->orWhere('user.full_name', 'like', '%' . $keyword . '%')
//            ->orWhere('user.email', '=', $keyword)
//            ->orWhere('employer.company_name', 'like', '%' . $keyword . '$')
//            ->orWhere('employer.phone', '=', $keyword)
            ->select('transaction.*', 'candidate.id as candidateId', 'candidate.full_name as candidateName', 'candidate.cv_title', 'user.username', 'employer.company_name');
        return $query->orderBy('transaction.created_at', 'DESC')->get();
    }
}