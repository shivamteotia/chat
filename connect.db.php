<?php


require('config.php'); 
$link=mysql_connect(HOST,USER,PASSWORD) or die("<font color='red'>Server not connected!!</font>");
	$feedback[]= "connected to database server<br/>";
	if($database=mysql_select_db(DATABASE,$link)){
		$feedback[]="database has been connected";
	}else
		$feedback[]="not connected database";
	
	
?>