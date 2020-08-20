<?php
   $conn = mysqli_connect('localhost','root','');
   $db = mysqli_select_db($conn, 'miniproject');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>user display page</title>
    <link rel="stylesheet" type="text/css" href="UserDisplyDat.css" />
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <script src="http://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="normalize.css" />  
</head>
<body>
    <div id="header">     
        <div id="logoimage">
            <img src="homelogoimg.png"/>
        </div>
        <form action="searchquery.php" method="POST">
            <div id="search-box">
                <input type="text" name="q" id="searchBox" maxlength="40" placeholder="Type to search">
                <input type="submit" name="search" id="search-btn" value="Search">
            </div>
        </form>  
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

<!--php code for display the data to user-->
<div class="datadisp">
    <?php
        $query = mysqli_query($conn,"SELECT * FROM informationupload");
         //  $num_rows = mysqli_num_rows($query); (not necessory)
         while($row = mysqli_fetch_array($query)){
            
        
             $oname = $row['oname'];
             $phonenum = $row['phonenum'];
             $houseRelation = $row['homeRelation'];
             $address1 = $row['address1'];
             $address2 = $row['address2'];
             $housenum = $row['housenum'];
             $countryname = $row['countryname'];
             $statename = $row['statename'];
             $districtname = $row['districtname'];
             $rentcost = $row['rentcost'];
             $electricity = $row['electricity'];
             $watercharge = $row['watercharge'];
             $bedroom = $row['bedroom'];
             $balconies = $row['balconies'];
             $floors = $row['floors'];
             $furnituretype = $row['furnituretype'];
             $bathroom = $row['bathroom'];
             $files = $row['img1'];
             
             
             
             //echo $oname . ' ' . $phonenum . ' ' . $houseRelation . ' ' . $address1 . ' ' . $address2 . ' ' . $housenum . ' ' . $countryname . ' ' . $statename . ' ' . $districtname . ' ' . $rentcost . ' ' . $electricity . ' ' . $watercharge . ' ' . $bedroom . ' ' . $balconies . ' ' . $floors . ' '. $furnituretype . ' '. $bathroom . '<br />';
              //  echo '<h2> Owner Details' . $oname ;
              //  echo '<h2> phone number' .$phonenum;
    ?>
         
    <div class="datadisplay">
        <div class="useruploadimg">
            <img class="uploadimg" src=" <?php echo $row['img1']; ?>" >
        </div>
         
        <div class="subdata">
            <p><h2 class="subhead">* Owner details</h2></p></br>
            <p> Owner Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row['oname']; ?> </p>
            <p>Contact Number :&nbsp;<?php echo $row['phonenum']; ?> </p>
            <p>I am  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; <?php echo $row['homeRelation']; ?></p></br>

            <p><h2 class="subhead">* Property location</h2></p></br>
            <p>Address 1 : &nbsp; <?php echo $row['address1']; ?></p>
            <p>Address 2 : &nbsp; <?php echo $row['address2']; ?> </p>
            <p>House Number :&nbsp;<?php echo $row['housenum']; ?></p>
            <p>Country  &nbsp; : &nbsp; <?php echo $row['countryname']; ?> </p>
            <p>State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp; <?php echo $row['statename']; ?> </p>
            <p>District &nbsp;&nbsp;&nbsp; :&nbsp; <?php echo $row['districtname']; ?></p></br>
        
            <p><h2 class="subhead">* Rent Details</h2></p></br>
            <p>Monthly Rent &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; <?php echo $row['rentcost']; ?> Rs</p>
            <p>Electricity Charge :&nbsp; <?php echo $row['electricity']; ?> </p>
            <p>Water Charge &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; <?php echo $row['watercharge']; ?></p></br>

            <p><h2 class="subhead">* Property Features</h2></p></br>
            <p>Bedroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row['bedroom']; ?></p>
            <p>Balconies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row['balconies']; ?></p>
            <p>Floors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row['floors']; ?> </p>
            <p>Furniture Type :&nbsp;<?php echo $row['furnituretype']; ?> </p>
            <p>Bathroom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;<?php echo $row['bathroom']; ?> </p>
        </div>    
    </div>
    <?php
         }    
    ?>
</body>   
</html>