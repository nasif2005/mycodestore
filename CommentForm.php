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
		<div class="ptitle">Post your comment.</div>
	
	
	<form name="form1" action="CommentSave.php" method="post">
	<?php
		echo "Movie Name:   ".$_GET['link'];
	?>		
	
	<p style="text-align: center;">User Name: <?php
		session_start();
		$var_value = $_SESSION['varname'];
		$_SESSION['moviename'] = $_GET['link'];
		echo $var_value ;		
		?></p>
	<p style="text-align: center;">Date: <?php echo date("m/d/y"); ?> </p>
	<p style="text-align: center;"></p>
	<p style="text-align: center;"><textarea name="comments" cols="55" rows="5">Enter your comments here...</textarea><br></p>
	<p style="text-align: center;"><input name="submit" value="Post It" type="submit"></p>	 
	 
	</form>
	
	</div>

</body>
</html>