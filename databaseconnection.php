<?php

    //variable for database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dberror1 = "Could not connect to database";
	
    // create a connection to the database	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error()); 
    mysql_select_db("movie_database") or die(mysql_error()); ;
		

?>