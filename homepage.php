<?php 
session_start();
include ('dbconn.php');
include('summary.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css"> -->
    <title>WheelChair Management System- Home Page</title>
</head>
<body>

<nav>
    <div class="nav-container">
           <div class="wrapper">
              <a href="index.php"><img src="images/logo.png" alt="Mustard Seed Logo"></a>
           </div>
           <div class="logout">
               <a class = "link" href="logout.php">Logout<a>
           </div>
     </div>
</nav>

<section>
    <div class="hero-container">
       <div class="wrapper">
       <h1>Home Page</h1>
    </div>
</div>
</section>

<section class="wrapper">
    <table>
        <thead>
            <tr><td>Homes</td><td># of Residents</td>
            <td># of Residents in WheelChair</td>
            <td># of Females</td>
            <td># of Males</td>
            <td># of Residents in Admitted in Hospital</td>
        
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

        <tr><td><a class = "link" href = "jl/jl.php">Jacob Ladder</a></td>
        <tr><td><a class = "link" href = "ba/ba.php">Blessed Assurance</a></td>
        </tbody>
    </table>
        
    </div>
    
</section>
    
</body>
</html>