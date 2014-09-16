<?php
  require_once('recaptcha-php/recaptchalib.php');
  $privatekey = "6Leg9_MSAAAAAG5-9ujWK6yb2vYC2lc3oM6T1wLV";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
   // die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
   //      "(reCAPTCHA said: " . $resp->error . ")");
      header('Location: index.php?err=2');
  } else {
				// Your code here to handle a successful verification
				//echo 'Successfull Verification';
				//Getting all the required data.
				$email = $_POST["email"];
				//echo $email;
				$fname = $_POST["fname"];
				//echo $fname;
				$lname = $_POST['lname'];
				//echo $lname;
				$phone = $_POST['phone'];
				//echo $phone;
				$password = $_POST["password"];
				//echo $password;				
				$conn = @mysql_connect("db-server","db-user","db-pass");
				
				//echo mysql_error();
				
				@mysql_selectdb('edugrmq5_db',$conn);
				
				$query="insert into volunteers (email,fname,lname,phone,password) values ('".$email."','".$fname."','".$lname."','".$phone."','".$password."')";
				
				$result = @mysql_query($query);
				 if(!$result){
				 //echo 'koi to gadbad hai';
					//echo mysql_error();
					//Error code 1,error
					 header('Location: index.php?err=1');
					}
				 else
				 {
					//echo 'successfullty inserted row ';
					//Error code 0 ,success
				   header('Location: index.php?err=0');
				 }
					
				}
  ?>