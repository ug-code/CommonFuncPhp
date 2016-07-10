<?php  

	/**
	**
	**@author:Uğur Güneş
	**@description : including a remote file in PHP
	**@since 2016-07-10
	**/

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

        if ( $display ) { echo nl2br("\n $r"); }

        return $r;
    }
    
    
