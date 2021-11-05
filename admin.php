<?php 
include('functions.php');
include('dbconn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">
    <title>Wheelchair Management System - Admin Panel</title>
</head>
<body>
<header>
    <a href = "#"><img src="images/logo.png" alt="Mustard Seed Logo" class="logo"></a>
    <nav>
       <ul class="nav-area">
          <li><a href="../users.php">Users</a></li>
             <li><i class="far fa-user-circle fa-lg"></i> <a href="#" class="nav-end-link"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a></li>
        </ul>
    </nav>
     
    <div class = "nav-end">
        <a href="logout.php" class="btn-area">Logout</a>
     </div>
 </header>

 <section>
     <div class="sidebar">
         <h2>Functions</h2>
         <ul class="sidenav">
             <li>
                 <a href="adduser.php">
                <i class="fas fa-user"></i>
               
                 <span>Add a User</span>
                 </a>
             </li>
             <li>
                 <a href="#">
                <i class="fas fa-lock"></i>
               
                 <span>Change Password</span>
                 </a>
             </li>

         </ul>
     </div>
 </section>


 
 <section class="main">
     <h1>Users</h1>

    <table>
        <thead>
            <tr>
                <td></td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Username</td>
                <td>Role</td>
                <td colspan="3">Action</td>         
            </tr>
    </thead>
            
        <tbody>
          
      <?php

$query = mysqli_query($conn,"SELECT * from tblusers");
if($query->num_rows > 0){
    while ($row = mysqli_fetch_assoc($query))
    {
        $firstname = $row['firstname'];
        $lname = $row['lastname'];
        $username = $row['username'];
        $role = $row['role'];
        $id = $row['id'];

        echo '<tr><td><i class="fas fa-user"></i></td><td>'.$firstname.'</td><td>'.$lname.'</td><td>'.$username.'<td>'.$role.'</td>
        <td><a class = "navlink_button" href = "viewresidents.php?name="><i class = "fas fa-lock"></i></a></td>
        <td><a class = "navlink_button" href ="edituser.php?edit='.$id.'">Role</a></td><td>
        <a class = "navlink_button" href ="../edit.php?edit=">User</a></td></tr>';
     }
    }else{
         echo "no results";
     }
    
    ?>

         
     
        </tbody>
    </table>
        
    </div>
    
   


 </section>
 <div>
<?php  if(isset($_SESSION['message'])): ?>
<div class="alert_admin <?php echo $_SESSION['messagecolor']?>">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<?php echo $_SESSION['message'];
unset($_SESSION['message']);
 endif;?>
</div>
</body>
</html>