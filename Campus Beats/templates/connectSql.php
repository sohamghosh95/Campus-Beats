<?php
	define("DB_SERVER","localhost");
	define("DB_USER","root");
	define("DB_PASSWORD","");
	define("DB_NAME","campus_beats");

	$connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME);

	//test if connection occured
	if(mysqli_errno($connection))
	{ die("connection failed" . mysqli_error() ."(". mysqli_errno().")");
	} 
 ?>