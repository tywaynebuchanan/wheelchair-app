<?php 

session_start();
require("passwordchange.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="changepassword.css">
    <title>WheelChair Management System- Change Password</title>
</head>
<body>

<div class="center">
   
    <h2>Change Password</h2>
  
    <?php if(!empty($_SESSION['message']))
             { echo '

              <div class = "container">
             <div class = "alert alert-'.$_SESSION['msgcolor'].'">'.$_SESSION['message'].'</div>
             </div>
             
             '; } ?>
        
        <?php unset($_SESSION['message']); ?>

         


     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <div class="txt_field">
            <input type="password" name = "newpassword" id ="newpassword">
            <span></span>
            <label>New Password</label>
        </div>
        <div class="txt_field">
            <input type="password" name = "conpassword" id ="conpassword">
            <span></span>
            <label>Confirm Password</label>
        </div>
        
        <input type="submit" name="change" value = "Submit" id="">
     
    </form>
    <p>Wheelchair Management System</p>
</div>

    
</body>
</html>