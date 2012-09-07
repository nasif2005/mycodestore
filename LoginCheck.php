<?php

	// making a connection from "databaseconnection.php"
	include("databaseconnection.php");
	
	// check for  user name
	$test1 = $_POST["username"];
	// check for  password
	$test2 = $_POST["password1"];
	echo "password".$test2;
	// check if pass word is empty
	//if ($test2==null)
	 //  header("Location:wrongusername.html");
	
	
	$result = mysql_query("SELECT * FROM `users` WHERE username = '$test1'") or die(mysql_error());
	
	$info = mysql_fetch_array( $result );
	
	// check if any row is found
	$num = mysql_num_rows($result);
		echo $num;
		if ($num==0)
		{
			//echo "sss";
			header("Location:WrongUserName.html");
		}
		elseif($info["password"] == $test2)
		{
			//echo "zzzz";
			session_start();
			$_SESSION['varname'] = $test1;
			header("Location:MovieListEdit.php");	
		}
		else
		{
			//echo "www";
			header("Location:WrongUserName.html");
		}
	//echo $info['password']
	
	/*
	Print "<table border cellpadding=3>"; 
 
		while($info = mysql_fetch_array( $result )) 
		{ 
			Print "<tr>"; 
			Print "<th>Movie Name:</th>  <td>".$info['password'] . "</td>       "; 
		//	Print "<th>Rating: </th>  <td>".$info['rating'] . " </td>  "; 
		//	Print "<th>Date: </th>  <td>".$info['date'] . " </td>  </tr>";
		} 
			Print "</table>"; */
	
?>