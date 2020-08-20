<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>login page</title>
    <link rel="stylesheet" type="text/css" href="infoUploadowner.css" />
    <link href="https://fonts.googleapis.com/css?family=Candal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css" />    
</head>
<body>
<div id="header">    
        <div id="logoimage">
            <img id="header-logo" src="homelogoimg.png"/>
        </div>
        <div id="search-box">
            <input type="text" id="searchBox" maxlength="40"  name="searchbox" placeholder="Type to search">
            <a id="search-btn" href="#">search</a>
        </div>    
        <ul id="navbar">
            <li><a href="DisplayUser.php">Home</a></li>
            <li><a href="login.php">Verify Phone Number</a></li>
            <li><a href="DisplayUser.php">Post Property</a></li>
            <li><a href="aboutus.php">About</a></li>
        </ul>
        <div id="heading">
            <h3>Rent House</h3>
            <h3>Information</h3> 
            <h3>Portal</h3>
        </div>           
</div>
   <section>
        <img src="2132891.jpeg" class="back_img" alt="background image">
        <img src="csm-real-estate-agent-a143824cba.jpg" class="logo_img">
        <h1 class="head_info">Rent Your Property</h1>
        <h3 class="head_subinfo">Upload address, information and photos of your house</h3>
        <hr class="hori_line" width="100%" color="black">
        
<form action="addinfo.php" method="POST" enctype="multipart/form-data">    
   <div class="include_all"> 
      <div class="personal">
         <div class="personal_detail">
            <h2>Personal Details</h2><br/></br>
                  <div class="name">
                  <p>Name :</p><input type="text" name="oname" placeholder="Name of the owner">
                  </div>

                  <div class="c_num">
                  <p>Contact Number :</p><input type="number" name="phonenum" placeholder="Owner phone number">
                  </div>

                  <div class="i_am">
                     <p> I am :</p>
                        <select id="homeRelation" name="homeRelation">
                           <option selected hidden value="">Select Relation</option>
                           <option value='Owner' name="owner">Owner</option>
                           <option value='Agent' name="agent">Agent</option>
                           <option value='Builder' name="builder">Builder</option>
                        </select>
                  </div>
               </br/><br/><br/>
            <h2>Property Location</h2><br/><br/>
                     <div class="address_1">
                        <p> Address 1 :</p><input type="text" name="address1" placeholder="Current address of house">
                     </div>
                     
                     <div class="address_2">
                     <p> Address 2 :</p><input type="text" name="address2" placeholder="Street or area name">
                     </div>

                     <div class="house_num">
                     <p>House number :</p><input type="text" name="housenum" placeholder="Rent house number">
                     </div> 

                     <div class="country_names">
                        <p>Country :</p>
                        <select id="country" name="countryname">
                           <option value='countryCode' name="countryName">Country Name</option>
                        </select>
                     </div>   

                     <div class="state_name">
                        <p> State :</p>
                        <select id="state" name="statename">
                           <option value='stateCode' name="stateName">State Name</option>
                        </select>
                     </div>

                     <div class="district_name">
                        <p> District :</p>
                        <select id="district" name="districtname">
                           <option value='districtName' name="districtName">District Name</option>
                        </select>
                     </div>
               </div>
               
         <div class="property_features">
            <div class="rent_details">
               <h2>Rent Details </h2><br/><br/>
                  <div class="month_rent">
                     <p>Monthly Rent :</p><input type="number" name="rentcost" placeholder="rent per month">
                  </div>

               <div class="electric_charge">
                   <p> Electricity charge :</p>
                   <select id="electric_chrg" name="electricity">
                     <option selected hidden value="">Select your choice</option>
                     <option value='Include' name="Include">Included</option>
                     <option value='Exclude' name="Exclude">Excluded</option>
                  </select>
               </div>

               <div class="water_charger">
                  <p> Water charge :</p>
                  <select id="water_chrg" name="watercharge">
                     <option selected hidden value="">Select your choice</option>
                     <option value='Include' name="Include">Included</option>
                     <option value='Exclude' name="Exclude">Excluded</option>
                  </select>
               </div>
                 <br/><br/><br/>
             </div>

            <h2>Property Features</h2><br/><br/>
               <div class="bed_rooms">
                 <p>Bedrooms :</p><input type="number" name="bedroom" placeholder="Number of Bedrooms">
               </div>

               <div class="balcony_num">
                 <p>Balconies :</p><input type="number" name="balconies" placeholder="Number of Balconies">
               </div>

               <div class="floor_number">
                  <p>Floor Number :</p><input type="number" name="floors" placeholder="Number of Floors">
               </div>

               <div class="furnished_status">
                   <p>Furnished Status :</p>
                           <select id="furnishedType" name="furnituretype">
                              <option selected hidden value="">Select furniture type</option>
                              <option value='Furnished' name="Furnished">Furnished</option>
                              <option value='Unfurnished' name="Unfurnished">Unfurnished</option>
                              <option value='Semi-furnished' name="Semi-furnished">Semi-Furnished</option>
                           </select>
               </div>

               <div class="bath_rooms">
                   <p>Bathrooms :</p><input type="number" name="bathroom" placeholder="Number of Bathrooms">
               </div> 

            </div>
        </div> <br/><br/><br/><br/><br/><br/>
         
      <div class="img_upload">
          <h2 class="img_head">Upload Property Images</h2><br/><br/><br/><br/>
            <input type="file" name="uimage" id="file" value="image" class="select_img1"/>
          <!-- <input class="select_img2" type="file" name="image" />
           <input class="select_img3" type="file" name="image" />
           <input class="select_img4" type="file" name="image" />
           <input class="select_img5" type="file" name="image" />-->
      </div> 

      <!--Button to upload property-->
      <div class="post_butn">
              <button class="post_button" type="postproperty" name="post_property">Post Property</button>
      </div>
     </div>
   </form>
</section> 
    <script src=" jquery-3.3.1.min.js"></script>
    <script src="cuntstatcity.js"></script>
</body>
</html>

<!--php code for uploading the data to the data base-->
<?php
  $connect = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connect,'miniproject');

  if(isset($_POST['post_property'])){
    $oname = $_POST['oname'];
    $phonenum = $_POST['phonenum'];
    $homeRelation = $_POST['homeRelation'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $housenum = $_POST['housenum'];
    $countryname = $_POST['countryname'];
    $statename = $_POST['statename'];
    $districtname = $_POST['districtname'];
    $rentcost = $_POST['rentcost'];
    $electricity = $_POST['electricity'];
    $watercharge = $_POST['watercharge'];
    $bedroom = $_POST['bedroom'];
    $balconies = $_POST['balconies'];
    $floors = $_POST['floors'];
    $furnituretype = $_POST['furnituretype'];
    $bathroom = $_POST['bathroom'];
    $files = $_FILES['uimage'];
    
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');
    
    if(in_array($filecheck,$fileextstored)){

      $destinationfile = 'uploadingimg/'. $filename;
      move_uploaded_file($filetmp,$destinationfile);

      $INSERT = "INSERT INTO `informationupload` (`oname`, `phonenum`, `homeRelation`, `address1`, `address2`, `housenum`, `countryname`, `statename`, `districtname`, `rentcost`, `electricity`, `watercharge`, `bedroom`, `balconies`, `floors`, `furnituretype`, `bathroom`, `img1`) VALUES ('$oname', '$phonenum', ' $homeRelation', '$address1', '$address2', '$housenum', '$countryname', '$statename', '$districtname', '$rentcost', '$electricity', '$watercharge', '$bedroom', '$balconies', '$floors', '$furnituretype', '$bathroom', '$destinationfile')";

     
    $query_run = mysqli_query($connect,$INSERT);

    if($query_run){
        echo '<script type="text/javascript">alert("data uploaded sucessfully")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("upload currect data")</script>';
    }
  }
}
?>
    
       
     