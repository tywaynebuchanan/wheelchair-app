<?php 
include('dbconn.php');
include('summary.php');
session_start();
     
$id = $_GET['repair'];
$query = mysqli_query($conn,"SELECT firstname,lastname FROM tblresidentdata Where id = '$id'");
if($query->num_rows > 0){
    while($row = mysqli_fetch_assoc($query))
    {
       $firstname = $row['firstname'];   
       $lastname = $row['lastname'];       
    }

    }else{
        echo "No records founds";
    }

    $id = $_GET['repair'];
    if($_SERVER["REQUEST_METHOD"] == "POST" & !empty("POST"))
    {
        
        $details = mysqli_escape_string($conn,$_POST['repair']);
        // $status = mysqli_escape_string($conn,$_POST['status']);
        $date = date('Y-m-d');

        $insertrepair = ("INSERT INTO `tblrepairs`(`id`,`details`, `status`,`datecompleted`) VALUES ('$id','$details','Assigned','$date')");
        if(mysqli_query($conn, $insertrepair)){
            header('Location: repairs.php');
         $_SESSION['message'] =  "Repair for " .$firstname." ".$lastname." was succesfully assigned to Shane.";
         $_SESSION['messagecolor'] = "success";
      } else{
          header('Location: repairs.php');
          $_SESSION['message'] = "ERROR: Could not able to execute $insertrepair. " . mysqli_error($conn);
          $_SESSION['messagecolor'] = "danger";
      }
    }

   


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
       <title>WheelChair Management System - Repairs</title>
</head>
<body>


<header>
    <img src="../images/logo.png" alt="Mustard Seed Logo" class="logo">
    <nav>
       <ul class="nav-area">
          <li><a href="../homepage.php">Home</a></li>
          <li><a href="#">Homes</a></li>
          <li><a href="../repairs.php">Repairs(<?php include('summary.php'); echo $_SESSION["totalrepairs"]?>)</a></li>
          <li><a href="#">View Residents</a></li>
         
        <li> <i class="far fa-user-circle fa-lg"></i> <a href="#" class="nav-end-link"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a></li>
        
       </ul>
    </nav>
    <div class = "nav-end">
    <a href="../logout.php" class="btn-area">Logout</a>
       
    </div>
 </header>

 <section>
      <div class="hero-container">
         <div class="wrapper">
         <h1>Update Repair for <?php echo $firstname.$lastname?></h1>
      </div>
</div>
</section>

 <section class="form-wrapper">
     <form action="" method="post" class="pure-form-stacked">
         <label for="repairdetails">Enter the information for the repair on <?php echo $firstname ?> chair</label>
         <textarea name="repair" class = "textarea" id="" cols="30" rows="10"></textarea>
         <!-- <label for="">Status</label>
         <select name="status" id="">
             <option value="inprogress">In Progress</option>
             <option value="completed">Completed</option>
             <option value="part">Waiting on parts</option>
             <option value="other">Other</option>

         </select> -->
        <!-- <label for="date">Date Completed</label>
         <input type="date" name="date"> -->

         <!-- <label for="other">Other reasons</label>
         <textarea name="other" class = "textarea" id="" cols="30" rows="10"></textarea> -->
        

        <input type="submit" name="submit" value = "Submit" class="submitbtn pure-button pure-button-primary">
        <a class = "cancel-link" onclick="window.history.back();">Cancel</a>
     </form>

 </section>


    
</body>
</html>