<?php
	$msg="";
  require_once('recaptcha-php/recaptchalib.php');
  $privatekey = "6Leg9_MSAAAAAG5-9ujWK6yb2vYC2lc3oM6T1wLV";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
  error_reporting(0);
  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    //die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       //  "(reCAPTCHA said: " . $resp->error . ")");
		 $msg = "CAPTCHA wasn't entered correctly. Go back and try it again!";
		 
		 header("Location: contact.php?err=$msg");
  } else {
			// Your code here to handle a successful verification
			//echo 'Successfull Verification';
			//Getting all the required data.
			$email = $_POST['email'];
			//echo $email;
			$name = $_POST['name'];
			//echo $name;
			$phone = $_POST['phone'];
			//echo $phone;
			$country = $_POST['country'];
			//echo $country;
			$message = $_POST['query'];
			//echo $message;				
			include 'dbsetting.php';
			$conn = @mysql_connect($mysql_host,$mysql_user,$mysql_password);
			@mysql_selectdb($mysql_database,$conn);
			$query1="insert into contactus (email,name,phone,country,query) values('".$email."','".$name."','".$phone."','".$country."','".$message."')";
			$result = mysql_query($query1);
			 if(!$result){
				echo mysql_error();
				$success =false;
				$msg="Error while submitting data";
				header("Location: contact.php?err=$msg");
				}
			 else
			 {
				$success=true;
				//echo 'successfullty inserted row ';
				$msg="Thanks for contacting us.we will be back to you soon !";
				header("Location: contact.php?err=$msg");
			 }				
		}
  ?>