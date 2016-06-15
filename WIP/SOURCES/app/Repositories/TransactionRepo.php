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
            ->select('candidate.full_name as candidateName', 'transaction.*')
            ->orderBy('transaction.created_at', 'desc')
            ->skip($start)
            ->take($limit)
            ->get();
        return $query;
    }
}