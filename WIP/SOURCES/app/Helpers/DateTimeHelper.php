<?php
namespace App\Helpers;

use DateTime;

class DateTimeHelper
{
	const SHORT_DATE_STANDARD = "d/m/Y";
	
	public static function convertDateFormat($dateString, $fromFormat, $toFormat){
		$date = DateTime::createFromFormat($fromFormat, $dateString);

		if(!$date){
			return null;
		}
		
		$newDateString = $date->format($toFormat);
		
		return $newDateString;
	}
	
	public static function formatDate($dateString){
		$date = DateTime::createFromFormat(SHORT_DATE_STANDARD, $dateString);
		
		if(!$date){
			return null;
		}
		
		$newDateString = $date->format($toFormat);
		
		return $newDateString;
	}
}