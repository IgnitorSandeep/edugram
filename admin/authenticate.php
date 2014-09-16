<?php
	
	session_start();
	$email=$_POST['email'];
	//echo "$email";
	$password=$_POST['password'];
	//echo "$password";
	//error_reporting(0);
	include 'dbsetting.php';
	$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
	@mysql_selectdb($mysql_database,$conn);

	$email = mysql_real_escape_string($email);
	
	//echo $email;

	$query="SELECT email,pass,name
			FROM adminlogin
			WHERE email='$email' and pass='$password';" ;
			
	$result = mysql_query($query);
	//echo $result;
	if(mysql_num_rows($result)==0)
	{
		header('Location : index.php?msg=worng email or password');

	}else{
	
		$userData=mysql_fetch_array($result);
		
		//session_regenerate_id();
		session_start();
		
		$_SESSION['username']=$userData['email'];
		
		$_SESSION['user']=$userData['name'];
		
		//session_write_close();
		
		header('Location: dashboard.php');
	}

?>
