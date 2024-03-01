<?php
	$dbhost="localhost"; 
	//$dbhost="biye24.com.bd";
	$dbuser="root";
	//$dbuser="biye24_admin";
	$dbpass="";
	//$dbpass="65adminbiye65";
	//$dbname="biye24com_db";
	$dbname="matrimonyrdx";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	//$con->set_charset('utf8mb4');
	mb_internal_encoding("UTF-8");

	if (PHP_VERSION_ID < 50600) {
		iconv_set_encoding('input_encoding', 'UTF-8');
		iconv_set_encoding('output_encoding', 'UTF-8');
		iconv_set_encoding('internal_encoding', 'UTF-8');
	} else {
		ini_set('default_charset', 'UTF-8');
	}





$con -> set_charset("utf8mb4");

	
?>