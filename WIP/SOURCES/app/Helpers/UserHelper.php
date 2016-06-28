<?php


namespace App\Helpers;

use Lang;
use StringHelper;

class UserHelper {

	/**
	 * Check employer is vip account
	 * @param $employer
	 * @return bool
	 */
	public static function isVip($employer){
		if(!$employer->vip || !$employer->expire_vip){
			return false;
		}

		return strtotime($employer->expire_vip) >= time();
	}

	public static function getTransactionCost(){

	}
}