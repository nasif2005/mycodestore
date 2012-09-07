<!DOCTYPE html>

<html lang="en">

<?php

	include("databaseconnection.php"); 
	$mycode = $_POST["code"];
	
	// perform the query
	$result = mysql_query("SELECT * FROM temp where code='$mycode'") or die(mysql_error()); 
	// if found the result no:0, yes:1
	$num = mysql_num_rows($result);
	
	if ($num==0)
	{
		header("Location:invalidcode.html");
	}
	
	$info = mysql_fetch_array( $result );
	
	//$info["code"]
	$a1 = $info["username"];
	$b1 = $info["email"];
	$c1 = $info["password"];
	
//	$result1 = mysql_query(" SELECT id FROM users ") or die(mysql_error());
	
//	$info1 = mysql_fetch_array( $result1 );
//	$h2= $info1["id"]+1;
	$result2 = mysql_query(" insert into users values ('$a1', '$b1', '$c1') ") or die(mysql_error());
	
	
	//echo "Thank you for your registration. Please log in now." 
              
?>


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
	</div>
	
	<div class="rightbar">
		<div class="ptitle">Thank you for your registration. Please log in now.</div>
		<br/>
		<img src="generalimage/narnia.jpg" STYLE="position; WIDTH:400px; HEIGHT:450px" >
		<br/>
	</div>

</body>
</html>