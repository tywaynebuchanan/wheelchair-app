<?php
include "dbconn.php";

if(isset($_SESSION['username'])){
         
   // Destroy session
   session_destroy();
   header('Location: index.php');
   $_SESSION['message'] = "You have been logout out!";
}else{
   header('Location: index.php');
   $_SESSION['message'] = "You have been logout out!";
}