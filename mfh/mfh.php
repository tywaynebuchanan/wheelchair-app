<?php
   include_once('../dbconn.php');
   include('../sections.php');
   include('../session.php');
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
  
<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>My Father's House</h1>
      </div>
</div>
</section>

<div class="wrapper">
     <a class = "navlink_button" href="../homepage.php">Back</a>
     </div>


   <?php  if(isset($_SESSION['message'])): ?>
<div class="alert_box <?php echo $_SESSION['messagecolor']?>">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<?php echo $_SESSION['message'];
unset($_SESSION['message']);
 endif;?>

</div>


<section class="wrapper">
<table id="table">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Location</th>
          <th>Age</th>
          <th colspan = '3'>Action</th>
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
  $location = $row['location'];
  $age = $row['age'];
  $id = $row['id'];
  
  echo '<tr><td>'.$name.'</td><td>'.$lname.'</td><td>'.$location.'</td><td>'.$age.'</td>
  <td><a class = "navlink_button" href = "viewresidents.php?name='.$id.'">View</a></td><td><a class = "navlink_button" href ="../edit.php?edit='.$id.'">Edit</a></td><td>
  <a class = "navlink_button" href ="../repairdata.php?repair='.$id.'"><i class="fas fa-tools"></i> Repairs</a></td></tr>';
  
 }
}
  ?>
      </tbody>
</table>
</section>


<?php 
 $conn->close(); // Close database connection
?>

<section class="footer">
    <p>
        The use of this platform and information contain in such platform is strictly confidential 
        and is solely for the use of the users within the Mustard Seed Communities. Images and information
        should not be reproduced or circulated or shared with any other user or parties. If you are not recipient,
        you may not disclose or use the information/photos on this platform in any way. 
    </p>

</section>
<script src="mainv1.js">

</script>
</body>
</html>