
<?php
  
    if(isset($_POST['sendotp'])) {
              require('textlocal.class.php');

              $textlocal = new Textlocal(false,false,API_KEY);

              $numbers = array(' $_9739939639');
              $sender = 'TXTLCL';
              $otp=mt_rand(10000,99999);
              $message = "Hello " . $_POST['username'] . " This is your OTP" .$otp;

              try {
                  $result = $textlocal->sendSms($numbers, $message, $sender);
                            setcookie('otp' , $otp);
                              echo "otp succesfully send....";

              } catch (Exception $e) {
                  die('Error: ' . $e->getMessage());
              }
            }
?>
