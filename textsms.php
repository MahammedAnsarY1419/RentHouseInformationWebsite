<?php
  if(isset($_POST['sendotp'])){
	// Authorisation details.
	$username = "mahammedannu@gmail.com";
	$hash = "bba0cfaae813b1d4583cef6e1f1595d6e0fadd83f22141ae309c6a0457fcf3a4";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";
           $username=$_POST['username'];


	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers =  $_POST['pnum'];// A single number or a comma-seperated list of numbers
  $otp=mt_rand(100000,999999);
  setcookie("otp", $otp);
	$message =  "Hiii ".$username. "Your OTP  is ".$otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
               echo("OTP send successfully");
	curl_close($ch);
}
if(isset($_POST['verify'])){
  $varotp=$_POST['onum'];
  if($verotp==$_COOKIE['onum']){
    echo("logged successfully");
  }
  else{
    echo("otp wrong");
  }
}
?>
