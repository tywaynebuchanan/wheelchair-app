<?php 
include_once('functions.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">      
   <script src="https://kit.fontawesome.com/3ca45502f4.js" crossorigin="anonymous"></script>
   <link rel="shortcut icon" href="images/favicon-96x96.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>WheelChair Management System </title>
</head>
<body>
       <main>
           <section>
              <div class="login-container">
              <?php if(!empty($_SESSION["message"]))
             { echo '
             <div class = "center alert alert-'.$_SESSION["msgcolor"].' alert-dismissible fade show " role="alert">'.$_SESSION["message"].'
             </div> '; } ?>
              <?php unset($_SESSION['message']); ?>
                  <div class="login-form">
                     <div class="title">
                     <h1 class="heading-primary">Login</h1>
                        <div class="form">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <input type="text" name="username" id="" placeholder="Email">
                                <input type="password" name="password" id="" placeholder="Password">
                              
                               <a href="#" class="link-password">Forgot Password</a>
                                <div class="submit">
                                    <input type="submit" name = "submit" value="Login" class="submit-btn">
                                </div>
                              
                            </form>

                            <div class="version">
                                <p class="text">Wheelchair Management System</p>
                                <p class="text">Version 1.1 December 2021</p>
                            </div>
                        </div>
                    </div>  
                  </div>
               
               
              </div>
           </section>
       </main>
    </body>
</html>