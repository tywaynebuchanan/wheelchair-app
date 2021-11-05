<header>
    <img src="../images/logo.png" alt="Mustard Seed Logo" class="logo">
    <nav>
       <ul class="nav-area">
          <li><a href="../homepage.php">Home</a></li>
          <li><a href="#">Apostolates</a></li>
          <li><a href="../repairs.php">Repairs(<?php session_start(); include('summary.php'); echo $_SESSION["totalrepairs"]?>)</a></li>
          <li><a href="#">View Residents</a></li>
          <i class="far fa-user-circle fa-lg"></i>
        <a href="#" class="nav-end-link"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a>
       </ul>
    </nav>
    <div class = "nav-end">
        
        <a href="../logout.php" class="btn-area">Logout</a>
    </div>
 </header>



 


 