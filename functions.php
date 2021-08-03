<?php
session_start();
include('dbconn.php');

if($_SERVER["REQUEST_METHOD"] == "POST" & !empty($_POST))
{

  $username = mysqli_escape_string($conn,$_POST['username']);
  $password = md5($_POST['password']);

  $query = mysqli_query($conn,"SELECT * from tblusers where username = '$username' AND password = '$password'");

  $row = mysqli_fetch_array($query);
  $count = mysqli_num_rows($query);

  if($count == 1) {
       
    header("location: index.php");
 }else {
    echo "Your Login Name or Password is invalid";
 }
}


?>