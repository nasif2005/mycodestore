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
		<div class="ptitle">Posted comments.</div>
	
	<table id="gradient-style" summary="Meeting Results">
	<?php

		$h1 = $_GET['link'];
		// making a connection from "databaseconnection.php"
		include("databaseconnection.php");
		//$h1=$_POST["moviename"];
		//echo $h1;
		$data = mysql_query("SELECT * FROM comment_list where movie_name='$h1'") or die(mysql_error()); 
		Print "<th>Movie Name:</th> <th>User Name: </th> <th>Date: </th> <th>Comment: </th>";
		while($info = mysql_fetch_array( $data )) 
		{ 
			Print "<tr>"; 
			Print "  <td>".$info['movie_name'] . "</td>  <br/>"; 
			Print "  <td>".$info['user_name'] . " </td>  <br/>"; 
			Print "  <td>".$info['date'] . " </td> <br/>" ;
			Print "  <td>".$info['comment'] . " </td> <br/> </tr> ";
			
		} 
	?>
		 
	</form>
	
	</div>

</body>
</html>