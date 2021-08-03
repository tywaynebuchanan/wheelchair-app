<?php 

include_once('dbconn.php');
include('editfunction.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
   
    <title>Wheelchair Management System -Data Entry</title>
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
          <p>Enter Information on the resident</p>
        </div>
        </div>
  </section>


<section class="wrapper">
    <form class ="pure-form pure-form-stacked" action="" method="post">
        <fieldset>

        <fieldset class="pure-group">
        <label for="textarea">Additional Notes</label>
        <textarea class="pure-input-1-2" placeholder="Enter recommendations here"  name = 'notes' cols="30" rows="10" required></textarea>
    </fieldset>


            <!-- <legend></legend>
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-first-name">First Name</label>
                <input type="text" id="multi-first-name" name = "firstname" class="" />
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-last-name">Last Name</label>
                <input type="text" id="multi-last-name"  name = "lastname" class="" />
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-email">Date of Birth</label>
                <input type="date" id="dob" name = "dob" class="" />
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="pure-input-1-2" >
                    <option>--Select One--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                 </select>

               
            </div>
             <div class="pure-u-1 pure-u-md-1-3"> 
                <label for="multi-city">City</label>
                <input type="text" id="multi-city" class="" />
            </div> -->
            <!-- <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-state">Apostolite</label>
                <select name="location" id="multi-state" class="pure-input-1-2" >
                    <option>--Select One--</option>
                    <option value="MFH:My Father House">My Father's House</option>
                    <option value="SP:Sophie Place">Sophie's Place</option>
                    <option value ="GOH:Gift of Hope">Gift of Hope</option>
                    <option value ="WM:Widows Mite">Widows Mite</option>
                    <option value ="BA:Blessed Assurance">Blessed Assurance</option>
                    <option value ="M25:Matthew 25">Matthew 25</option>
                    <option value ="MH:Martha House">Martha House</option>
                    <option value ="DTC:Dare to Care">Dare to Care</option>
                    <option value ="JC:Jacob Ladder">Jacob Ladder</option>
                    <option value ="MC:Mary Child">Jacob Ladder</option>
                </select>
            </div>
        </div>  -->
       
        <button type="submit" name = "submit" class="pure-button pure-button-primary special">Submit</button>
        <a class = "cancel-link" onclick="window.history.back();">Cancel</a>
    </fieldset>

        </fieldset>


    </form>

</section>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="main.js"></script>

</body>
</html>