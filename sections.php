
<header>
    <img src="../images/logo.png" alt="Mustard Seed Logo" class="logo">
    <nav>
       <ul class="nav-area">
          <li><a href="../homepage.php">Home</a></li>
          <li><a href="#">Homes</a></li>
          <li><a href="#">View Residents</a></li>
       </ul>
    </nav>
    <div class = "nav-end">
        <i class="far fa-user-circle fa-lg"></i>
        <a href="#" class="nav-end-link"><?php session_start(); echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a>
        <a href="../logout.php" class="btn-area">Logout</a>
    </div>
 </header>

 