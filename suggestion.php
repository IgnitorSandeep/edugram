<?php

	$suggestion = $_POST['suggestion'];
	//echo $suggestion;
	
	$email = $_POST['email'];
	//echo $email;
	
	$fname = $_POST['fname'];
	//echo $fname;
	
	$lname = $_POST['lname'];
	//echo $lname;	
	
	$conn = @mysql_connect("db-server","db-user","db-pass");
	//echo mysql_error();
	@mysql_selectdb('edugrmq5_db',$conn);
	
	$query="insert into suggestion (suggestion,email,fname,lname) values('".$suggestion."','".$email."','".$fname."','".$lname."')";
	
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