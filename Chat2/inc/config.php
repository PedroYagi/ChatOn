<?php
	/*
		Configurações do site
	*/

	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="chat";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
	$sel = mysqli_select_db($con,$dbname);

	
?>
