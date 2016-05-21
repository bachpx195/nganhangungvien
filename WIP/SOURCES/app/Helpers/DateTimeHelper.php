<?php
namespace App\Helpers;

use DateTime;

class DateTimeHelper
{
	const FORMAT_SHORT_DATE_STANDARD = "d/m/Y";
	const FORMAT_LONG_DATE_MYSQL = "Y-m-d h:i:s";
	const FORMAT_SHORT_DATE_MYSQL = "Y-m-d";
	
	public static function convertDateFormat($dateString, $fromFormat, $toFormat){
		$date = DateTime::createFromFormat($fromFormat, $dateString);

		if(!$date){
			return null;
		}
		
		$newDateString = $date->format($toFormat);
		
		return $newDateString;
	}
	
	public static function formatDate($dateString, $format = DateTimeHelper::FORMAT_SHORT_DATE_STANDARD){
		$date = DateTime::createFromFormat(DateTimeHelper::FORMAT_LONG_DATE_MYSQL, $dateString);
		
		if(!$date){
			$date = DateTime::createFromFormat(DateTimeHelper::FORMAT_SHORT_DATE_MYSQL, $dateString);
		}
		
		if(!$date){
			return null;
		}
		
		$newDateString = $date->format($format);
		
		return $newDateString;
	}
	
	
}