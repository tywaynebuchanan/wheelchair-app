<?php
session_start();
include('dbconn.php');
$message = '';
$msgcolor = '';

if($_SERVER["REQUEST_METHOD"] == "POST" & !empty($_POST))
{

  $username = mysqli_escape_string($conn,$_POST['username']);
  $password = md5($_POST['password']);

  $query = mysqli_query($conn,"SELECT * from tblusers where username = '$username' AND password = '$password'");

  $row = mysqli_fetch_array($query);
  $count = mysqli_num_rows($query);

  
  $role = $row['role'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
    if($role =='Administrator'){
        $link = 'homepage.php';
        }
       elseif($role =='Admin')
       {
        $link = 'admin.php';
        }

  if($count == 1) {
    
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $_SESSION["firstname"] = $firstname;
    $_SESSION["lastname"] = $lastname;
  $_SESSION["role"] = $row['role'];
header("Location: ".$link."");
      }else {
  $msgcolor = "danger";
    $message = "Incorrect username or password!";
    $_SESSION['msgcolor'] = $msgcolor;
    $_SESSION['message'] = $message;
 }
}


?>