<?php namespace App\Helpers;

use Lang;

class StringHelper
{
	public static function strip($str) {
		if (!$str)
			return false;
		
		$unicode = array (
				'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
				'd' => 'đ',
				'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
				'i' => 'í|ì|ỉ|ĩ|ị',
				'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
				'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
				'y' => 'ý|ỳ|ỷ|ỹ|ỵ' 
		);
		
		foreach ($unicode as $nonUnicode => $uni)
			$str = preg_replace ("/($uni)/i", $nonUnicode, $str);
		
		return $str;
	}
	
	public static function title($str) {
		$str = trim($str);
		$str = preg_replace("/ +/", ' ', $str);
		
		return $str;
	}
	
	public static function alias($str) {
		
		$str = mb_strtolower($str, 'UTF-8');
		$str = self::strip($str);
		$str = trim(preg_replace("/[^A-Za-z0-9]/", ' ', $str));
		$str = preg_replace("/ +/", '-', $str);
		$str = preg_replace("/-+/", '-', $str);
		
		return $str;
	}
	
	public static function uri($str) {
		
		$str = trim($str);
		$str = mb_strtolower($str, 'UTF-8');
		$str = self::strip($str);
		$str = trim(preg_replace("/[^A-Za-z0-9+]/", ' ', $str));
		$str = preg_replace("/ +/", '-', $str);
		$str = preg_replace("/-+/", '-', $str);
		
		return $str;
	}
}