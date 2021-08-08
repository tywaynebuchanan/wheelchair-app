<?php
session_start();
   include_once('dbconn.php');
//    include("sections.php");
   include('session.php');
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
  
  <title>WheelChair Management System</title>
</head>
<body>

<header >
    <img src="images/logo.png" alt="Mustard Seed Logo" class="logo">
    <nav>
       <ul class="nav-area">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="#">Homes</a></li>
          <li><a href="#">Repairs</a></li>
          <li><a href="#">View Residents</a></li>
       </ul>
    </nav>
    <div class = "nav-end">
        <i class="far fa-user-circle fa-lg"></i>
        <a href="#" class="nav-end-link"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a>
        <a href="logout.php" class="btn-area">Logout</a>
    </div>
 </header>
  
<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Repairs</h1>
      </div>
</div>
</section>


<section>
   <?php  if(isset($_SESSION['message'])): ?>
<div class="alert_box <?php echo $_SESSION['messagecolor']?>">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<?php echo $_SESSION['message'];
unset($_SESSION['message']);
 endif;?>

</div>
</section>

<section class="wrapper">
<table id="table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Repair Notes</th>
          <th>Status</th>
          <!-- <th colspan = '2'>Action</th> -->
          </tr>
      <thead>
      <tbody>
       
        <?php 

$query = mysqli_query($conn,"SELECT * FROM tblresidentdata where location1 = 'MFH' and wheelchairbound = 'Yes' ORDER BY firstname ASC");

if($query->num_rows > 0){
 while ($row = mysqli_fetch_assoc($query))
 {
   $name = $row['firstname'];
  $lname = $row['lastname'];
  $repairnotes = $row['notes'];
  $age = $row['age'];
  $id = $row['id'];

  
  echo '<tr><td>'.$name.'</td><td>'.$lname.'</td><td>'.$repairnotes.'</td><td>In Progress</td></tr>';


  
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

<!-- <script src="../main.js"></script> -->
</body>
</html>