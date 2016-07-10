<?php

$myscript = fopen("https://raw.githubusercontent.com/ug-code/CommonFuncPhp/master/functions.global.php", "r");
$incmyscript= fread($myscript , 9999);
fclose($myscript);
// include in the contents of my_script.php    

eval("?> ".$incmyscript);

?>

<?php
	//include('https://raw.githubusercontent.com/ug-code/CommonFuncPhp/master/functions.global.php');

	#Usage Examples 
	$func = new func();
	#true or false?
	$timer = true;	
	$func->timer_start($timer);

	#memory usage => 104.75 mb
	echo $func->convert(memory_get_usage(true)); // 123 kb


	$func->timer_stop($timer,10);


?>
