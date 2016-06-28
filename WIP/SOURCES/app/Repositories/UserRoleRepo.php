<?php
/**
 * Created by PhpStorm.
 * User: daibx
 * Date: 6/28/2016
 * Time: 9:45 PM
 */

namespace App\Repositories;


use App\Model\Role;
use App\Model\UserRole;

class UserRoleRepo implements IUserRoleRepo
{

    /**
     * {@inheritdoc}
     */
    function getRoleByUserId($userId)
    {
        // get user role by user id
        $userRole = UserRole::where('user_id', '=', $userId)
                ->first();
        if (isset($userRole) && $userRole) {
            // get role by role id
            $role = Role::where('id', $userRole->role_id)
                ->first();
            return $role;
        }
        return null;
    }

    /**
     * {@inheritdoc}
     */
    function getRoleIdByUserId($userId)
    {
        $userRole = UserRole::where('user_id', '=', $userId)
            ->first();
        if (isset($userRole) && $userRole) {
            return $userRole->role_id;
        }
        return null;
    }


    /**
     * {@inheritdoc}
     */
    function getByUserId($userId)
    {
        return UserRole::where('user_id', '=', $userId)
            ->first();
    }
}