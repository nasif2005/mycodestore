<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your Movie</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    

	
</head>

<body>

	<header>
		<img src="bannerimage/a.jpg" />
    </header>
	
	<div class="leftbar">
		&raquo;<a href="MovieListEdit.php" style="color: white">MovieList</a>
		<br>
	</div>
	
	<div class="rightbar">
		<div class="ptitle">Thank you for your comment.</div>
		<?php
		// making a connection from "databaseconnection.php"
		include("databaseconnection.php");
		//$test1 = $_POST["moviename"];
		//$test2 = $_POST["username"];
		session_start();
		$test1 = $_SESSION['moviename'];
		$test2 = $_SESSION['varname'];
	
		
		$test3 = date("m/d/y");
		$test4 = $_POST["comments"];
		
		//echo $test1." ".$test2." ".$test3." ".$test4." ";
		
		$data = mysql_query("insert into comment_list values('$test1','$test2','$test3','$test4')") or die(mysql_error());
		
	
	?>
	</div>

</body>
</html>