<?php 
session_start();
include ('dbconn.php');
include('summary.php');
include('templates/navbar.php');

// Check user login or not
if(!isset($_SESSION['username'])){
    header('Location: index.php');
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css"> -->
    <title>WheelChair Management System- Home Page</title>
</head>
<body>


   
<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Dashboard</h1>
      </div>
</div>
</section>
<!-- <section>
      <div class="hero-container-1">
         <div class="wrapper">
         <h1>Total Population</h1>
      </div>
</div>
</section> -->

<section>
   <?php  if(isset($_SESSION['message'])): ?>
<div class="alert_box <?php echo $_SESSION['messagecolor']?>">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<?php echo $_SESSION['message'];
unset($_SESSION['message']);
 endif;?>

</div>
</section>

<section>
    <div class="container-new">
       <div class="box">
        <h3>Total Residents</h3>
        <p class="numbers"><i class="fas fa-users"></i> <?php echo  $totalres ?></p>
    </div>


        <div class="box">
        <h3>Total Males</h3>
        <p class="numbers"><i class="fas fa-male"></i> <?php echo  $total_male_result ?></p>
        
    </div>


        <div class="box">
        <h3>Total Females</h3>
        <p class="numbers"> <i class="fas fa-female"></i> <?php echo  $total_female_result ?></p>
     </div>

         <div class="box">
        <h3>Total in Wheelchairs</h3>
        <p class="numbers"><i class="fas fa-wheelchair"></i><?php echo  $total_wc_result ?></p>
         </div>

</div>

</section>

<section class="wrapper">
    <table>
        <thead>
            <tr>
                <td>Apostolates</td>
            <td># of Residents</td>
            <td># of Residents in WheelChair</td>
            <td># of Females</td>
            <td># of Males</td>
            <!-- <td># of Residents in Admitted in Hospital</td> -->
        
        </tr></thead>
            
        <tbody>
            <tr><td><a class = "link" href = "sp/sp.php">Sophie's Place</a></td>
            <td><?php echo $sptotal?></td>
         <td><?php echo $spwheelchairtotal?></td>
         <td><?php echo $sptotalfemale?></td>
         <td><?php echo $sptotalmale?></td></tr>

            <tr><td><a class = "link" href = "mfh/mfh.php?">My Father's House</a></td>
            <td><?php echo $mfhtotal?></td>
         <td><?php echo $mfhwheelchairtotal?></td>
         <td><?php echo $mfhtotalfemale?></td>
         <td><?php echo $mfhtotalmale?></td>
        
        </tr>
            <tr><td><a class = "link" href = "goh/goh.php">Gift of Hope</a></td><td><?php echo $totalgoh?></td>
         <td><?php echo $wheelchairtotalgoh?></td>
         <td><?php echo $totalfemalegoh?></td>
         <td><?php echo $totalmalegoh?></td></tr>
            <tr><td><a class = "link" href = "jer/jer.php">Jerusalem</a></td>
            <td><?php echo $totaljer?></td>
         <td><?php echo $wheelchairtotaljer?></td>
         <td><?php echo $totalfemalejer?></td>
         <td><?php echo $totalmalejer?></td>
        </tr>

        <!-- <tr><td><a class = "link" href = "jl/jl.php">Jacob Ladder</a></td></tr> -->
        <tr><td><a class = "link" href = "ba/ba.php">Blessed Assurance</a></td> 
        <td><?php echo $batotal?></td>
         <td><?php echo $bawheelchairtotal?></td>
         <td><?php echo $batotalfemale?></td>
         <td><?php echo $batotalmale?></td>

         <tr><td><a class = "link" href = "wm/wm.php">Widow's Mite</a></td> 
        <td><?php echo $wmtotal?></td>
         <td><?php echo $wmwheelchairtotal?></td>
         <td><?php echo $wmtotalfemale?></td>
         <td><?php echo $wmtotalmale?></td>

</tr>


        </tbody>
    </table>
        
    </div>
    
</section>


<section class="footer">
    <p>
        The use of this platform and information contain in such platform is strictly confidential 
        and is solely for the use of the users within the Mustard Seed Communities. Images and information
        should not be reproduced or circulated or shared with any other user or parties. If you are not recipient,
        you may not disclose or use the information/photos on this platform in any way. 
    </p>

</section>

<script src = "homepage.js"></script>
</body>
</html>