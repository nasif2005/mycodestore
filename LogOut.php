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
	</div>
	
	<div class="rightbar">
		<div class="ptitle">You are logged out.</div>
	
	
	<?php
		session_start(); //to ensure you are using same session
		session_destroy(); //destroy the session
	?>
	</div>

</body>
</html>