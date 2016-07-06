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

    /**
     * Get all user by user type
     * @param $user_type user type
     * @return mixed
     */
    function getUserRolesByUserType($user_type);

    /**
     * Get user role by id
     * @param $id user role id
     * @return mixed
     */
    function getUserRolesById($id);

    /**
     * Set role for user
     * @param $userId user id
     * @param $roleId role id
     * @return mixed
     */
    function updateUserRole($userId, $roleId);
}