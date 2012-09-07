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
		&raquo;<a href="index.html" style="color: white">Home</a>
		<br>
		&raquo;<a href="Login.html" style="color: white">LogIn</a>
		<br>
		&raquo;<a href="Register.html" style="color: white">Register</a>
		<br>
		&raquo;<a href="MovieList.php" style="color: white">Movie List</a>
	</div>
	
	<div class="rightbar">
	<div class="ptitle">Movie list</div>
		<table id="gradient-style" summary="Meeting Results">

			<?php 

				// making a connection from "databaseconnection.php"
				include("databaseconnection.php");
				
				$data = mysql_query("SELECT * FROM movie_list") or die(mysql_error()); 
					
					//Print "<table border cellpadding=3>"; 
					
					
					Print "<th>Movie Name:</th> <th>Rating: </th> <th>Date: </th> <th>Comment: </th> <th>Comment: </th> ";
				
				
					while($info = mysql_fetch_array( $data )) 
					{ 
						Print "<tr>"; 
						
						Print "  <td>".$info['movie_name'] . "</td> "; 
						Print "  <td>".$info['rating'] . " </td>  "; 
						Print "  <td>".$info['date'] . " </td> ";
						Print '<th> <a href="CommentRead.php?link= ' . $info['movie_name'] . ' ">Read</a> </th>';
						Print '<th> <a href="CommentForm.php?link= ' . $info['movie_name'] . ' ">Post</a> </th>';
						Print "</tr>"; 
						
						//Print "<th>Date: </th>    </tr>"; it will be useful after login
					} 
					
		
		
		
		
		?>
		</table>
	</div>

</body>
</html>