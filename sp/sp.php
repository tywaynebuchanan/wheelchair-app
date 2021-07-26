<?php
   include_once('../dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles.css">
  <title>WheelChair Management System</title>
</head>
<body>

<nav>
        <div class="nav-container">
           <div class="wrapper">
              <a href="../index.php"><img src="../images/logo.png" alt="Mustard Seed Logo"></a>
           </div>
     </div>
     </nav>

<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Sophie's Place</h1>
      </div>
</div>
</section>
<!-- 
<section class="wrapper">
<div class="space">
<a class = "navlink" href="index.php">Back</a>
</div>
</section> -->

<section class="wrapper">
   <h1>Resident Summary</h1>
</section>

<section class = "wrapper">
   <table>
      <thead>
         <tr>
         <th>Total Number of Residents</th>
         <th>Number of Residents in WheelChair</th>
         <th>Number of Females</th>
         <th>Number of Males</th>
         </tr>
      </thead>
      <tbody>

      <?php 

      
      $totalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP'");
      $row = mysqli_fetch_array($totalres);
      $total = $row[0];

      $wheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and wheelchairbound = 'Yes'");
      $row1 = mysqli_fetch_array($wheelchair);
      $wheelchairtotal = $row1[0];

      $female = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and gender = 'Female'");
      $row2 = mysqli_fetch_array($female);
      $totalfemale = $row2[0];

      $male = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and gender = 'Male'");
      $row3 = mysqli_fetch_array($male);
      $totalmale = $row3[0];

      ?>


      <tr>
         <td><?php echo $total?></td>
         <td><?php echo $wheelchairtotal?></td>
         <td><?php echo $totalfemale?></td>
         <td><?php echo $totalmale?></td>

      </tr>
      
   </table>
</section>
  



<section class="wrapper">


<table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Location</th>
          <th>Age</th>
          <th colspan = '2'>Action</th>
          </tr>
      <thead>
      <tbody>
       
        <?php 

$query = mysqli_query($conn,"SELECT * FROM tblresidentdata where location1 = 'SP' and wheelchairbound = 'Yes' ORDER BY firstname ASC");

if($query->num_rows > 0){
 while ($row = mysqli_fetch_assoc($query))
 {
   // echo "<tr><td>".$row['firstname']."</td></tr><tr><td>";
   $name = $row['firstname'];
  $lname = $row['lastname'];
  $location = $row['location'];
  $age = $row['age'];
  $id = $row['id'];


  echo '<tr><td>'.$name.'</td><td>'.$lname.'</td><td>'.$location.'</td><td>'.$age.'</td>
  <td><a class = "navlink" href = "viewresidents.php?name='.$id.'">View</a></td><td><a class = "navlink" href ="edit.php?edit='.$id.'">Edit</a></td></tr>';
 
 }
}
  ?>

  
      </tbody>
</table>
</section>


<?php 
 $conn->close(); // Close database connection
?>

<footer>
   <nav>
         <div class="footer-container">
         </div>
   </nav>
</footer>

<script src="main.js"></script>
</body>
</html>