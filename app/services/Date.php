<?php 
namespace App\Services;
use Carbon\Carbon;

class Date 
{
	
	public function parse($date){

		Carbon::setLocale('fr');
		return Carbon::parse($date)->shortAbsoluteDiffForHumans(2);
	}
	
	public function getDate($date1, $date2){

		Carbon::setLocale('fr');
		$debut = Carbon::parse($date1);
		$fin = Carbon::parse($date2);

		$diff = $fin->shortAbsoluteDiffForHumans($debut, 2);

		return $diff;
	}




}

























 ?>