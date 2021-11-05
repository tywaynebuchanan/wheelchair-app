<?php 

if (!isset($_SESSION['username']) == true) {
    header('Location:index.php');
}

?>