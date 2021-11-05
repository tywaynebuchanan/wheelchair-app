<?php
   include_once('../dbconn.php');
   include('../sections.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
    <title>WheelChair Management System</title>
</head>
<body>

  
</section>
        <?php
            $name = $_GET['name'];
           $res_query = mysqli_query($conn,"SELECT * from tblresidentdata WHERE id = '$name'");

            if($res_query->num_rows > 0){
                while ($row = mysqli_fetch_assoc($res_query))
              {
                 $firstname = $row['firstname'];
                 $lastname = $row['lastname'];
                 $location = $row['location'];
                 $gender = $row['gender'];
                 $age = $row['age'];
                 $chair = $row['currentchair'];
                 $propel = $row['selfpropel'];
                 $resue = $row['resuable'];
                 $foothand = $row['foothand'];
                 $size = $row['size'];
                 $pelvicobliquity = $row['pelvicobliquity'];
                 $lowside = $row['lowside'];
                 $typeofchair = $row['typeofchair'];
                 $backneeded = $row['backneeded'];
                 $laterals = $row['laterals'];
                 $sizelats = $row['sizelaterals'];
                 $shoulder = $row['shoulderwidth'];
                 $image1 = $row['image1'];
                 $image2 = $row['image2'];
                 $dob = $row['dob'];
                 $notes = $row['notes'];
                 $chest = $row['chestwidth'];
                 $hip = $row['hipwidth'];
                 $wknee = $row['widthatknee'];
                 $sth = $row['sth'];
                 $sta = $row['sta'];
                 $chestdepth = $row['chestdepth'];
                 $seatdepth = $row['seatdepth'];
                 $stfp = $row['stfp'];
                 
              }

              
     
?>


 <!--Single Product Detials-->
 <div class="small-container single-product">
     <div class="wrapper">
     <a class = "navlink_button" href="jer.php">Back</a>
     </div>
    <div class="row">
            <div class="col-2">
            <img src=<?php echo $image1 ?> alt="" id="productImg">

<div class="small-img-row">
    <div class="small-img-col">
        <img src=<?php echo $image1 ?> width= "100%" alt="" class="small-img">
    </div>
    <div class="small-img-col">
        <img src=<?php echo $image2 ?>  width= "100%" alt="" class="small-img">
    </div>
    <!-- <div class="small-img-col">
        <img src=<?php echo $image3 ?>  width= "100%" alt="" class="small-img">
    </div>
    <div class="small-img-col">
        <img src=<?php echo $image4 ?> width= "100%" alt="" class="small-img">
    </div> -->
</div>
<!--             
            <table class = "infotable">
                            <tbody>
                                <tr><td>Arrival Date:12/12/2000 </td></tr>
                                <tr><td>Tranfser from: MFH <?php ?></td></tr>
                                <tr><td>Condition: Cerebal Palsy <?php ?> </td></tr>
                                <tr><td>D-Width at Knee: <?php echo $chest?></td></tr>
                                <tr><td>E-Seat to Top of Head: <?php echo $hip?></td></tr>
                                <tr><td>F-Seat to Top of Shoulder (L, R): <?php echo $wknee?></td></tr>
                                <tr><td>G-Seat to Axilla (L,R) Armpit: <?php echo $sth?></td></tr>
                                <tr><td>H- Chest Depth (L,R) Back to Tip of Chest: <?php echo $sta?> </td></tr>
                                <tr><td>I. Seat Depth (L,R) Actual - 2-3 Fingers: <?php echo $seatdepth?></td></tr>
                                <tr><td>J- Seat to Footplate (L,R): <?php echo $stfp?></td></tr>
                             </tbody>
                           </table> -->
        </div>

        <div class="col-2">
            <p>Resident Name</p>
            <h1><?php echo $firstname." ".$lastname?></h1>
            <p><strong>Location:</strong> <?php echo $location?></p>
            <p><strong>Approx Age: </strong><?php echo $age?></p>
            <p><strong>Date of Birth: </strong><?php echo $dob?></p>
            <p><strong>Sex:</strong> <?php echo $gender?></p>
            <p><strong>Current Chair: </strong><?php echo $chair?></p>
            <p><strong>Self Propel?: </strong><?php echo $propel?></p>
            <p><strong>Foot/Hand:</strong> <?php echo $foothand?> </p>
            <p><strong>Re-usable for a another resident?: </strong><?php echo $resue?></p>
            <p><strong>Size: </strong><?php echo $size?></p>
            <p><strong>Pelvic Obliquity?: </strong><?php echo $pelvicobliquity ?></p>
            <p><strong> Low Side: </strong><?php echo $lowside?></p>

                      <button class="btn" id="button">
                      <span class="button_icon"><i class="fas fa-plus"></i></span><span class="button_text">Show Measurements</span>
                    </button>
            <table class = "table hidetable" id="table">
                            <tbody>
                                <tr><td>A- Shoulder Width: <?php echo $shoulder?></td></tr>
                                <tr><td>B- Chest Width: <?php ?></td></tr>
                                <tr><td>C- Hip Width: <?php ?> </td></tr>
                                <tr><td>D-Width at Knee: <?php echo $chest?></td></tr>
                                <tr><td>E-Seat to Top of Head: <?php echo $hip?></td></tr>
                                <tr><td>F-Seat to Top of Shoulder (L, R): <?php echo $wknee?></td></tr>
                                <tr><td>G-Seat to Axilla (L,R) Armpit: <?php echo $sth?></td></tr>
                                <tr><td>H- Chest Depth (L,R) Back to Tip of Chest: <?php echo $sta?> </td></tr>
                                <tr><td>I. Seat Depth (L,R) Actual - 2-3 Fingers: <?php echo $seatdepth?></td></tr>
                                <tr><td>J- Seat to Footplate (L,R): <?php echo $stfp?></td></tr>
                             </tbody>
                           </table>
            
               
            
            <p><strong>Type of Chair Needed: </strong><?php echo $typeofchair?></p>
            <p><strong>Type of Back Needed: </strong><?php echo $backneeded?></p>
            <p><strong>Laterals: </strong><?php echo $laterals?></p>
            <p><strong>Size: </strong><?php echo $sizelats?></p>
            <h3>Additional Notes</h3>
            <p><?php echo $notes?></p>
        </div>
    </div>
</div>


<?php  
   }else{
   echo "Unable to fetch data!";
  }
?>
<!------------------------->

<?php
  $conn->close(); // Close database connection
?> 
  <script src="../mainv1.js"></script>  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>