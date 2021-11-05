<?php
session_start();
require_once "dbconn.php";
$message = $msgcolor = $link = $isActive = '';
$passkey = $token = $username = $password = '';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $username = mysqli_escape_string($conn,$_POST['username']);
  $password = sha1($_POST['password']);
 

  if(!empty($username) && !empty($password))
  {
    $query = mysqli_query($conn,"SELECT * from tblusers where username = '$username' AND password = '$password'");
     $row = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
     
    $role = $row['role'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $isActive = $row['isActive'];
    $isChangedPassword = $row['IschangedPassword'];
    $passkey = $row['passKey'];

    switch($role)
    {
      case $role =='Viewer' && $isActive == 'YES' && $isChangedPassword === 'No':
        $link = "changepassword.php?change=".$passkey."";
        break;

      case $role =='Viewer' && $isActive == 'YES' && $isChangedPassword === 'Yes':
          $link = 'homepage.php';
          break;

      case $role =='Administrator' && $isActive === 'YES' && $isChangedPassword === 'Yes':
         $link = "homepage_admin.php";
         break;

      default:
      $msgcolor = "danger";
      $message = "You do not have access to the system";
      $_SESSION['msgcolor'] = $msgcolor;
      $_SESSION['message'] = $message;
    }
  
    if($count == 1) {
     
      $_SESSION["token"] = $token;
      $_SESSION["loggedin"] = true;
      $_SESSION["username"] = $username;
      $_SESSION["firstname"] = $firstname;
      $_SESSION["lastname"] = $lastname;
      $_SESSION["passkey"] = $passkey;
      $_SESSION["currenttime"] = time();
   
 
  header("Location: ".$link."");
        }else {
    $msgcolor = "danger";
      $message = "Incorrect username or password!";
      $_SESSION['message'] = $message;
      $_SESSION['msgcolor'] = $msgcolor;
      
   }
  }else{
    $msgcolor = "danger";
      $message = "Username and Password fields can not be blank!";
      $_SESSION['message'] = $message;
      $_SESSION['msgcolor'] = $msgcolor;
  }

  }





?>