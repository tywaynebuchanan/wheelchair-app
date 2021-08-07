<?php
session_start();
   include_once('../dbconn.php');
   include("../sections.php");
   include("../session.php");
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

<section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Jerusalem</h1>
      </div>
</div>
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
         $query = mysqli_query($conn,"SELECT * FROM tblresidentdata where location1 = 'JER' And wheelchairbound = 'Yes' ORDER BY firstname ASC");
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
                  <td><a class = "navlink" href = "viewresidents.php?name='.$id.'">
                  <i class="far fa-eye"></i>View</a></td><td><a class = "navlink" href ="edit.php?edit='.$id.'">
                  <i class="fas fa-edit"></i>Edit</a></td></tr>';
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
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>