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

	/**
	 * @return object
     */
	public static function getGraduationTypes()
	{
		return array(
			(object) [
				'id' => 1,
				'name' => 'Xuất sắc'
			],
			(object) [
				'id' => 2,
				'name' => 'Giỏi'
			],
			(object) [
				'id' => 3,
				'name' => 'Khá'
			],
			(object) [
				'id' => 4,
				'name' => 'Trung bình khá'
			],
			(object) [
				'id' => 5,
				'name' => 'Trung bình'
			]
		);
	}

	/**
	 * Get scale list
	 */
	public static function getScales()
	{
		return array(
			(object) [
				'id' => 1,
				'name' => 'Tốt'
			],
			(object) [
				'id' => 2,
				'name' => 'Khá'
			],
			(object) [
				'id' => 3,
				'name' => 'Trung bình'
			],
			(object) [
				'id' => 4,
				'name' => 'Kém'
			]
		);
	}
}