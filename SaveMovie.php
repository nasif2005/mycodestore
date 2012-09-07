<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Your Movie</title>

    <link rel="stylesheet" href="css/style.css" type="text/css">
    

	
</head>

<body onload="setuptimer();">

	<header>
		<img src="bannerimage/a.jpg" />
    </header>
	
	<div class="leftbar">
		&raquo;<a href="MovieListEdit.php" style="color: white">MovieList</a>
		<br>
		
	</div>
	
	<div class="rightbar">
			<div class="ptitle"> Thank you. Your Movie has been added.</div>
			<br/>
			<br/>
			<img src="generalimage/3-stooges-poster3.jpg" STYLE="position; WIDTH:300px; HEIGHT:350px" >
	</div>

</body>
<?php
		// making a connection from "databaseconnection.php"
		include("databaseconnection.php");

		$test1 = $_POST["moviename"];
		$test2 = $_POST["rating"];
		$test3 = $_POST["rating1"];
		$test4 = $_POST["rating2"];
		$test5 = $_POST["rating3"];
		//echo $test1." ".$test2." ".$test3." ".$test4." ".$test5." ";
		$test6 =  $test3."-".$test4."-".$test5;
		//echo "dd".$test6;
		echo "Your movie is added.";


		$data = mysql_query("insert into movie_list values('$test1','$test2','$test6')") or die(mysql_error());
	?>
</html>