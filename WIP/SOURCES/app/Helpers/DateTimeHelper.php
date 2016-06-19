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

	/**
	 * @param $option
	 * 			1: one day
	 * 			2: one week
	 * 			3: 1 month
	 * 			4: 1 week
	 */
	public static function getDateFromNow($option){
		$now = time();
		$oneDay = 24 * 60 * 60;

		switch ($option){
			case 1:
				$now = $now - $oneDay;
				return strtotime(date('Y-m-d', $now));
			case 2:
				$now = $now - $oneDay * 7;
				return strtotime(date('Y-m-d', $now));
			case 3:
				$now = $now - $oneDay * 30;
				return strtotime(date('Y-m-d', $now));
			case 4:
				$now = $now - $oneDay * 2 * 30;
				return strtotime(date('Y-m-d', $now));
		}
	}
}