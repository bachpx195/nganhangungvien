<?php namespace App\Helpers;

use Lang;
use StringHelper;

class CandidateHelper{
	
	public static function uri($candidate) {
	
		$slug = StringHelper::uri($candidate->cv_title);
		return $slug . '_' . $candidate->id;
	}
}