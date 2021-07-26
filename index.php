<?php 

include ('dbconn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.1/build/base-min.css"> -->
    <title>WheelChair Management System- Home Page</title>
</head>
<body>

<nav>
    <div class="nav-container">
           <div class="wrapper">
              <a href="index.php"><img src="images/logo.png" alt="Mustard Seed Logo"></a>
           </div>
     </div>
</nav>

<section>
    <div class="hero-container">
       <div class="wrapper">
       <h1>Home Page</h1>
    </div>
</div>
</section>

<section class="wrapper">
    <table>
        <thead>
            <tr><td>Homes</td></tr></thead>
        <tbody>
            <tr><td><a class = "link" href = "sp/sp.php">Sophie's Place</a></td></tr>
            <tr><td><a class = "link" href = "mfh/mfh.php?">My Father's House</a></td></tr>
            <tr><td><a class = "link" href = "goh/goh.php">Gift of Hope</a></td></tr>
            <tr><td><a class = "link" href = "jer/jer.php">Jerusalem</a></td></tr>
        </tbody>
    </table>
        
    </div>
    
</section>
    
</body>
</html>