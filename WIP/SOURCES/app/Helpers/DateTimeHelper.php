<?php
namespace App\Helpers;

use DateTime;

class DateTimeHelper
{
	public static function convertDateFormat($dateString, $fromFormat, $toFormat){
		$date = DateTime::createFromFormat($fromFormat, $dateString);

		if(!$date){
			return null;
		}
		
		$newDateString = $date->format($toFormat);
		
		return $newDateString;
	}
}