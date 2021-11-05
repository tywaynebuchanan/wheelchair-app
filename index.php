<?php 
include_once('functions.php');
session_start();

// $_SESSION["message"] = $message;
// $_SESSION['msgcolor'] = $msgcolor;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="chrome = 1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Wheelchair Management System-Login Page</title>
</head>
<body>


<div class="center">
   
    <h1>Login</h1>
  
    <?php if(!empty($_SESSION["message"]))
             { echo '

            
             <div class = "alert alert-'.$_SESSION["msgcolor"].' alert-dismissible fade show " role="alert">'.$_SESSION["message"].'
             </div>
           
             
             '; } ?>
        
        <?php unset($_SESSION['message']); ?>
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="txt_field">
            <input type="text" name="username" id="username" >
                       <label>Username </label>
        </div>
        <div class="txt_field">
            <input type="password" name = "password" id ="password">
                     <label>Password</label>
        </div>
        <div class="forget">
            Forget Password?
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value = "Login" id="">
        <!-- <div class="signup">
            Not a member? <a href="index.php">Sign Up!</a>
        </div> -->
    </form>
    <p>Wheelchair Management System</p>
</div>


<!-- <script src="main.js"></script> -->
</body>
</html>