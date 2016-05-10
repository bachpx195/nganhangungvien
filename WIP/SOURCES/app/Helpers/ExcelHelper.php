<?php 
namespace App\Helpers;

use Excel;

class ExcelHelper
{
	/**
	 * Parser excel file to data
	 * @param String $path 
	 * @param array $columns
	 * Ex: ['col_title1', col_title2]
	 */
	public static function load($path, $columns, $start = 0){
		$reader = Excel::selectSheetsByIndex(0)->load($path, function($reader) {
		
			// reader methods
		});
		
		$reader->formatDates(false);
		
		//parse to array
		$rows = $reader->toArray();
		
		$results = array();
		$idx = 0;
		foreach ($rows as $row){

			if($idx < $start){
				$idx ++;
				continue;
			}
			
			$idx ++;
			
			$item = array();
			
			for ($i = 0; $i < count($columns); $i++){
				$item[$columns[$i]] = $row[$i];
			}
			
			if (array_filter($item)) {
				// all values are not empty (where "empty" means == false)
				$results[] = $item;
			}
		}
		
		
		return $results;
	}
	
	public static function export($filename, $view, $params) {
		
		Excel::create($filename, function($excel) use($view, $params) {
			
			$excel->sheet('New sheet', function($sheet) use($view, $params) {
				$sheet->loadView($view, $params);
			});
		})->download('xls');
	}
}