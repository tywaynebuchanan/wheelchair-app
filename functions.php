<?php
session_start();
include('dbconn.php');

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
    if($role =='Administrator'){
        $link = 'homepage.php';
        }
       elseif($role =='Viewer')
       {
        $link = '../mfh.php';
        }

  if($count == 1) {
    
    $_session["username"] = $username;
    $_session["password"] = $password;
$_session["role"] = $row['role'];
header("Location: ".$link."");
  


    // header("location: homepage.php");
 }else {
    echo "Your Login Name or Password is invalid";
 }
}


?>