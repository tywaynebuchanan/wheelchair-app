<?php 
session_start();
$message = "";
include('dbconn.php');

$username = $_GET['username'];
if(isset($_POST['oldpassword']) && isset($_POST['newpassword']) && isset($_POST['conpassword'])){


    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $op = validate($_POST['oldpassword']);
    $np = validate($_POST['newpassword']);
    $cp = validate($_POST['conpassword']);
    if(empty($op))
    {
        $msgcolor = 'danger';
        $message = 'Old Password is missing';
        exit();
    }else if(empty($np))
    {
        $msgcolor = 'danger';
        $message = 'New Password is missing';
        exit();
    }else if($np !== $cp)
    {
        $msgcolor = 'danger';
        $message = 'New Password and confirmation does not match!';
        exit();
    }
        }else{  
                $op = md5($_POST['oldpassword']);
                $np = md5($_POST['newpassword']);
                // $usernanme = $_SESSION['username'];

                $sql = "SELECT password from tblusers WHERE username = '$usernanme' and password = '$op'";
                $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result) === 1)
                {
                    $sql2 = "UPDATE tblusers SET password = '$np',isChangedPassword = 'Yes' WHERE username = '$usernanme'";
                    mysqli_query($conn,$sql2);
                    $message = "You have changed your password success! Proceed to the login page";
                    $msgcolor = 'success';
                    

                }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="changepassword.css">
    <title>WheelChair Management System- Change Password</title>
</head>
<body>

<div class="center">
   
    <h1>Change Password</h1>
  
   <div class = "alert <?php echo $msgcolor?>"><?php echo $message ?></div>
     <form action="changepassword.php" method="post">
        <div class="txt_field">
            <input type="password" name="oldpassword" id="oldpassword">
            <span></span>
            <label>Old Password</label>
        </div>
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
        
        <input type="submit" name="submit" value = "Login" id="">
        <div class="signup">
            Do you have access? <a href="index.php">Sign In!</a>
        </div>
    </form>
    <p>Wheelchair Management System</p>
</div>

    
</body>
</html>