<?php


namespace App\Helpers;

use Lang;
use StringHelper;

class CandidateHelper {
	public static function uri($candidate) {
		$slug = StringHelper::uri ( $candidate->cv_title );
		return $slug . '_' . $candidate->id;
	}
	
	public static function language($point) {
		switch ($point) {
			case 1 :
				return "Tốt";
			case 2 :
				return "Khá";
			case 3 :
				return "Trung bình";
			case 4 :
				return "Kém";
			default:
				return "";
		}
	}
	
	public static function office($point) {
		switch ($point) {
			case 1 :
				return "Tốt";
			case 2 :
				return "Khá";
			case 3 :
				return "Trung bình";
			case 4 :
				return "Kém";
			default:
				return "";
		}
	}
}