<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: index.php");
     
   }
   $_SESSION['message'] = "You have successfully logged out";
   $_SESSION['msgcolor'] = "success";
?>