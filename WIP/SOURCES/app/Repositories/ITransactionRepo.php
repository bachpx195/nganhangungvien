<?php
namespace App\Repositories;

interface ITransactionRepo
{
    /**
     * Get transaction by user id
     * @param $userId user id
     * @param $start start record want to get
     * @param $limit number record get one time
     * @return mixed
     */
    function findByUserId($userId, $start, $limit);

    /**
     * Search transaction by employer information
     * @param $params param want to search
     * @param $pageSize number record in a page
     * @return mixed
     */
    function search($params, $pageSize);

    /**
     * Count number of transactions of employer for candidate
     *
     * @param $employerId
     * @param $candidateId
     * @return mixed
     */
    function countTrans($employerId, $candidateId);

    /**
     * Insert a transaction
     *
     * @param array $transaction
     * @return mixed
     */
    function insertTransaction($transaction);
}