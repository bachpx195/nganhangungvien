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

	public static function getTransactionCost($code){
		$yearOfExp = intval($code);

		switch ($yearOfExp){
			case -1:
				return 3000;
			case 0:
				return 5000;
			case 1:
				return 7000;
			case 2:
			case 3:
				return 9000;
			case 4:
			case 5:
				return 10000;
			case 6:
			case 7:
				return 15000;
			case 8:
			case 9:
			case 10:
				return 20000;
			case 99:
				return 25000;
		}
	}
}