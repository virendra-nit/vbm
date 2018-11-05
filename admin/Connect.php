<?php 
	$a = "localhost";
	$b = "shreeevent";
	$c = "shree@123";
	$db = mysql_connect($a,$b,$c);
	$con = mysql_select_db("shreeevents",$db);
?>