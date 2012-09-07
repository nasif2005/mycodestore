<?php
    // making a connection from "databaseconnection.php"
	include("databaseconnection.php");
	
	
	$happy=0;
	
	// check for  user name
	$test = $_POST["username"];
	// echo $test;
	// check if the name is alpha-numeric
	if(ctype_alnum($test))
	{
		//echo "match**";
		// perform the query
		$result = mysql_query("SELECT * FROM users where username='$test'") or die(mysql_error()); 
		// if found the result no:0, yes:1
		$num = mysql_num_rows($result);
		
		if ($num!=0)
		{
			$happy=1;
			header("Location:DoubleName.html");
		}
	}
	else
	{
		$happy=1;
		header("Location:InvalidName.html");
	}
	
	// get password
	$test1 = $_POST["password1"];
	$test2 = $_POST["password2"];
	
	//echo $test1.$test2;
	
	// check for same password
	if($test1 != $test2)
	{
		$happy=1;
		header("Location:PasswordMismatch.html");
	}
	//echo strlen($test1);
	
	// check for password length
	if(strlen($test1)<=2)
	{
		$happy=1;
		header("Location:PasswordLength.html");
	}
    // 	get email
	$test3 = $_POST["email"];
	
	// check for email validity
	$h1 = filter_var($test3, FILTER_VALIDATE_EMAIL);

	if ($h1 == "")
	{
		$happy=1;
		header("Location:EmailAddress.html");	
	}

	if ( $happy==0 )
	{
		$cofirm_code = md5(mt_rand());
		$result2 = mysql_query(" insert into temp values ('$cofirm_code', '$test', '$test3', '$test1') ") or die(mysql_error());
		//echo $cofirm_code;
		if($result2)
		{		
			$to = $test3;
			$subject = "your confirmation! from YourMovie";
			$body = "Your confirmation code:".$cofirm_code." Please enter this code. Thank you.";
		
			mail($to, $subject, $body);
			header("Location:ThankYou.html");
		}
		
	}
?>

