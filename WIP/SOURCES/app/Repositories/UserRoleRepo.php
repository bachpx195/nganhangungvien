<?php
/**
 * Created by PhpStorm.
 * User: daibx
 * Date: 6/28/2016
 * Time: 9:45 PM
 */

namespace App\Repositories;


use App\Model\Role;
use App\Model\User;
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


    /**
     * {@inheritdoc}
     */
    function getUserRolesByUserType($user_type)
    {
        $query = User::leftJoin('user_role', 'user.id', '=', 'user_role.user_id')
            ->leftJoin('role', 'user_role.role_id', '=', 'role.id')
            ->select('user_role.id', 'user_role.updated_at',
                'user.id as userId', 'user.username', 'user.full_name', 'user.email',
                'role.id as roleId', 'role.name as roleName')
            ->where('user.user_type', '=', $user_type)
            ->get();
        return $query;
    }

    /**
     * {@inheritdoc}
     */
    function getUserRolesById($id)
    {
        $query = User::leftJoin('user_role', 'user.id', '=', 'user_role.user_id')
            ->leftJoin('role', 'user_role.role_id', '=', 'role.id')
            ->select('user_role.id', 'user_role.updated_at',
                'user.id as userId', 'user.username', 'user.full_name', 'user.email',
                'role.id as roleId', 'role.name as roleName')
            ->where('user_role.id', '=', $id)
            ->first();
        return $query;
    }

    /**
     * {@inheritdoc}
     */
    function updateUserRole($userId, $roleId)
    {
        $userRole = UserRole::where('user_id', '=', $userId)->first();
        if (!(isset($userRole) && $userRole)) {
            $userRole = new UserRole();
            $userRole->user_id = $userId;
        }
        $userRole->role_id = $roleId;
        $userRole->save();
    }
}