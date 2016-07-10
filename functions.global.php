<?php  
	/**
	**
	**@author:Uğur Güneş
	**@description : including a remote file in PHP
	**@since 2016-07-10
	**/


	#My Function List 
	interface Ifunc
	{
		function timer_start();
		function timer_stop( $display, $precision);
		function convert($size);

	}


	#Let the game begin
	class func implements Ifunc
	{

		function timer_start() {

			global $timestart;

			$timestart = microtime( true );

			return true;
		}

		function timer_stop( $display = 0, $precision = 3 ) {

			global $timestart, $timeend;

			$timeend = microtime( true );
			$timetotal = $timeend - $timestart;
			$r = number_format( $timetotal, $precision );

			if ( $display ) { echo nl2br("\n time: $r"); }

			return $r;
		}
 	
		function convert($size)
		{
			$unit=array('b','kb','mb','gb','tb','pb');
			return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
		}

	}



