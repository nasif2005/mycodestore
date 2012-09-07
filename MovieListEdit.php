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
		<?php
		session_start();
		$var_value = $_SESSION['varname'];
		echo "Logged on as. ".$var_value ;		
		?>
		<br>
		&raquo;<a href="LogOut.php" style="color: white">LogOut</a>
		<br>
		&raquo;<a href="NewMovie.html" style="color: white">New Movie</a>
		<br>
	</div>
	
	<div class="rightbar">
	<div class="ptitle"> Movie List</div>
		
		<form name="form3" action="MovieListFilter.php" method="post">
			Movie Rating: G
			<input type="checkbox" name="checkbox1" value="Yes" />
			PG
			<input type="checkbox" name="checkbox2" value="Yes" />
			PG-13
			<input type="checkbox" name="checkbox3" value="Yes" />
			R
			<input type="checkbox" name="checkbox4" value="Yes" />
			<input type="submit" name="formSubmit" value="Submit" />
		</form>
		
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