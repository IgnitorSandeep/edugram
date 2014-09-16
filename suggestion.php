<?php

	$suggestion = $_POST['suggestion'];
	//echo $suggestion;
	
	$email = $_POST['email'];
	//echo $email;
	
	$fname = $_POST['fname'];
	//echo $fname;
	
	$lname = $_POST['lname'];
	//echo $lname;	
	
	include 'dbsetting.php';
	$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
	@mysql_selectdb($mysql_database,$conn);
	
	$query="insert into suggestion (suggestions,email,fname,lname) values('".$suggestion."','".$email."','".$fname."','".$lname."')";
	
	$result = @mysql_query($query);
	 if(!$result){
		//echo mysql_error();
		$success =false;
		//echo 'successfullty inserted row ';
		header('Location: index.php?response=error');
		}
	 else
	 {
		$success=true;
		//echo 'successfullty inserted row ';
		header('Location: index.php?response=submitted');
	 }
?>