<?php
    $conn = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($conn, 'miniproject');

    if(isset($_POST['search'])){
        $oname = $_POST['oname'];
       $address1 = $_POST['address1'];
     $address2 = $_POST['address2'];
     $districtname = $_POST['districtname'];
      $furnituretype = $_POST['furnituretype'];

        $query = "SELECT * FROM informationupload where oname='$oname' or address1='$address1' or address2='$address2' or districtname='$districtname' or furnituretype='$furnituretype' ";
        $query_run = mysqli_query($conn,$query);

        while($row = mysqli_fetch_array($query_run)){
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
    }
    ?>





