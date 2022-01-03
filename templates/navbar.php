<?php session_start();?>
<header class="header">
    <a href="#">
        <img src="../images/logo.png" alt="Logo" class="logo">
    </a>
    
    <nav class="main-nav">
        <ul class="main-nav-list">
            <li><a class="main-nav-link" href="../homepage.php" >Home</a></li>
            <li><a class="main-nav-link" href="#" >Apostolates</a></li>
            <li><a class="main-nav-link" href="#" >Repairs<span class="pill"><?php include('../summary.php'); echo $_SESSION["totalrepairs"]?></span></a></li>
            <li><a class="main-nav-link" href="#" >View Residents</a></li>
            <li><a href="#" class="main-nav-link"><i class="far fa-user-circle fa-lg"></i> <?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a></li>
            <li> <a href="logout.php" class="btn-area">Logout</a></li>
        </ul>
    </nav>
</header>



 


 