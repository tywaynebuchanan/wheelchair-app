<?php 
session_start();
include('dbconn.php');

$id = $_GET['edit'];

$query = mysqli_query($conn,"SELECT * from tblusers WHERE id = '$id'");

if($query->num_rows > 0){
    while ($row = mysqli_fetch_assoc($query))
    {
        $id = $row['id'];
        $firstname =$row['firstname'];
        $lastname = $row['lastname'];
        $password = $row['password'];
        $role = $row['role'];
    }
}

  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    
    
    <title>Wheelchair Management System - Admin Panel</title>
</head>
<body>
<header>
    <a href="admin.php"><img src="images/logo.png" alt="Mustard Seed Logo" class="logo"></a>
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
                 <a href="#">
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
     <h1>Edit User<?php echo $firstname."".$lastname?></h1>

      <div class="container-fluid">
      <form action = "" method = "post" class="row g-3" onsubmit="return checkblank()">
  <div class="col-md-5">
    <label for="inputEmail4" class="form-label">Email/Username</label>
    <input type="email" name = "email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" name = "password" class="form-control" id="inputPassword4">
  </div>
  <!-- <div class="col-md-6">
    <label for="inputConPassword" class="form-label">Confirm Password</label>
    <input type="password" name = "conpassword" class="form-control" id="inputPassword4">
  </div> -->
  <div class="col-md-2">
    <label for="inputRole" class="form-label">Role</label>
    <select  class="form-select" name="role">
      <option selected>Choose...</option>
      <option value="Viewer">Viewer</option>
      <option value ="Data Entry">Data Entry</option>
      <option value="Super User">Super User</option>
    </select>
  </div>
   <div class="col-md-6">
    <label for="inputCity" class="form-label">First Name </label>
    <input type="text" name = "firstname" class="form-control" id="inputfirstname" value = <?php echo $firstname ?>>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Last Name</label>
    <input type="text" name = "lastname" class="form-control" id="inputlastname" value = <?php echo $lastname?>>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn_submit" id="btn">Submit</button>
  </div>
   </div>

</form>

      </div>
      <div>
<?php  if(isset($_SESSION['message'])): ?>
<div class="alert_alert <?php echo $_SESSION['messagecolor']?>">
<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
<?php echo $_SESSION['message'];
unset($_SESSION['message']);
 endif;?>
</div>
     
 </section>


<script>

</script>
</body>
</html>