<?php
session_start();
include('dbconn.php');
$message = '';
$msgcolor = '';

if($_SERVER["REQUEST_METHOD"] == "POST" & !empty($_POST))
{

  $username = mysqli_escape_string($conn,$_POST['username']);
  $password = md5($_POST['password']);

//   $username = stripslashes($username);
//   $password = stripslashes($password);

  $query = mysqli_query($conn,"SELECT * from tblusers where username = '$username' AND password = '$password'");

  $row = mysqli_fetch_array($query);
  $count = mysqli_num_rows($query);

  
  $role = $row['role'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
    if($role =='Administrator'){
        $link = 'homepage.php';
        }
       elseif($role =='Viewer')
       {
        $link = 'mfh/mfh.php';
        }

  if($count == 1) {
    
    $_SESSION["username"] = $username;
    $_SESSION["password"] = $password;
    $_SESSION["firstname"] = $firstname;
    $_SESSION["lastname"] = $lastname;
    $_SESSION["timelogin"] = time();
$_SESSION["role"] = $row['role'];
header("Location: ".$link."");
      // header("location: homepage.php");
 }else {
  $msgcolor = "danger";
    $message = "Incorrect username or password!";
 }
}


?>