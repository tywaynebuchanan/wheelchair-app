<?php 
session_start();
include('dbconn.php');
$message = "";
$msgcolor = "";

if(isset($_POST['change']))
{

    
    $newpassword = sha1($_POST['newpassword']);
    $conpassword = sha1($_POST['conpassword']);

    if((!empty($newpassword)) && !empty($conpassword))
    {
      $result_update = mysqli_query($conn,"UPDATE tblusers SET password ='$conpassword', isChangedPassword
      = 'Yes' WHERE passKey = '".$_SESSION['passkey']."'");
      if (($result_update) === TRUE) {
        session_start();
        header("location: changepassword.php");
          $_SESSION['message'] = "Password Changed!";
          $_SESSION['msgcolor'] = "success";
          echo "you may now proceed to login";
          
        } else {
          session_start();
          header("location: changepassword.php");
          $_SESSION['message'] = "Password change failed!";
          $_SESSION['msgcolor'] = "danger";
        
          
        }
    }else{
      $_SESSION['message'] = "Username or Password can not be blank";
      $_SESSION['msgcolor'] = "danger";
    }
    
  }
       
    
   



?>