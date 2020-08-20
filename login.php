<!DOCTYPE html>
<?php
    define("API_KEY", 'fu7dU5ypzxY-nV9XRRch6EYYfljgiHBOEbQYeYlIiV');
    define("MOBILE",'9591131347');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="logindisp.css" />
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css" />
</head>
<body>
    <div id="header">
             
             <div id="logoimage">
                 <img id="header-logo" src="homelogoimg.png"/>
             </div>
               
             <ul id="navbar">
                 <li><a href="DisplayUser.php">Home</a></li>
                 <li><a href="login.php">Verify Phone Number</a></li>
                 <li><a href="addinfo.php">Post Property</a></li>
                 <li><a href="aboutus.php">About</a></li>
             </ul>
             <div id="heading">
                 <h3>Rent House</h3>
                 <h3>Information</h3> 
                 <h3>Portal</h3>
             </div>           
    </div>
      
    <section>
        <img src="photo-1464278500780-e60893407e29.jpg" class="mainimage" alt="background image">
            <h1 class="head_info">Rent House Information Protal</h1> 
            <h1 class="head_subinfo">Verify your Phone Number for Security Purpose</h1>
        <div class="login">
            <img src="verify1234.png" class="logimg">
            <form action="login.php" method="POST">
                <p>Username :-</p>
                <form class="input_text">
                    <input class="i_name" type="text" name="username" placeholder="Enter your name" required/>
                    <p>Phone number :-</p>
                    <input class="p_num" type="number" name="pnum" placeholder="Enter  phone number" required/>
                    <button class="b_type" type="submit" name="sendotp">Send OTP</button>
                    <p>Enter OTP :-</P>
                    <input class="i_otp" type="number" name="onum" placeholder="Enter  OTP" />
                    <button class="s_type" type="submit" name="verify">Verify</button>
                </form>
            </form>
        </div>
    <div class="sendsms">
        <?php
          if(isset($_POST['sendotp'])) {
              require('textlocal.class.php');
             
              $textlocal = new Textlocal(false, false, API_KEY);

              $numbers = array(9739939639);
              $sender = 'TXTLCL';
              $otp=mt_rand(10000, 99999);
              $message = "Hello " . $_POST['username'] . " This is your OTP " .$otp;

              try {
                  $result = $textlocal->sendSms($numbers, $message, $sender);
                            setcookie('otp' , $otp);
                              echo "otp succesfully send....";

              } catch (Exception $e) {
                  die('Error: ' . $e->getMessage());
              }
            }
            if(isset($_POST['verify'])){
                $otp1=$_POST['onum'];
                if($_COOKIE['otp'] == $otp1){
                    echo "OTP is successfully verified";
                }
                else{     
                   echo "please enter correct otp";
                }
                }
        ?>
    </div>
       
       <?php
                $username = $_POST['username'];
                $pnum= $_POST['pnum'];
                $onum= $_POST['onum'];

                if(!empty($username) || !empty($pnum) || !empty($onum)){
                $host="localhost";
                $dbUsername="root";
                $dbPassword="";
                $dbname="miniproject";

                //create connection
                $conn=new mysqli($host, $dbUsername, $dbPassword, $dbname);

                if(mysqli_connect_error()){
                    die('Connect Error('. mysqli_connect_error().')'.mysqli_connect_error());
                }else{
                    $INSERT ="INSERT Into logindata (username, pnum, onum) values(?, ?, ?)"; 

                    $stmt=$conn->prepare($INSERT);
                    $stmt->bind_param("sii", $username, $pnum, $onum);
                    $stmt->execute();
                    $stmt->close();
                    $conn->close();
                }
                }
                else{
                    echo "All field are required";
                    die();
                }
      ?>
    </section>
 </body>
</html>