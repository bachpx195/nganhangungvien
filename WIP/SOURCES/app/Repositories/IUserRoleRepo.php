<?php namespace App\Repositories;


interface IUserRoleRepo
{
    /**
     * Get role by user id
     * @param $userId
     * @return mixed
     */
    function getRoleByUserId($userId);

    /**
     * Get role id by user id
     * @param $userId user id
     * @return mixed
     */
    function getRoleIdByUserId($userId);

    /**
     * Get user role by user id
     * @param $userId user id
     * @return mixed
     */
    function getByUserId($userId);
}