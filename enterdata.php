<?php 
include_once('dbconn.php');
session_start();
$firstname = $lastname = $dob = $gender = $apos = '';
$message = $msgcolor= '';

if(isset($_POST['submit']))
{
    $firstname = mysqli_escape_string($conn,$_POST['firstname']);
    $lastname = mysqli_escape_string($conn,$_POST['lastname']);
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $apos = $_POST['location'];
    $location  = explode(":",$apos);
   
        $query = "INSERT INTO tblbasicinfo (firstname, lastname, dob,gender,location,location1) VALUES ('$firstname', '$lastname', '$dob','$gender','$location[0]','$location[1]')";
        if(mysqli_query($conn, $query)){
            
            header("location: homepage_admin.php");
            $msgcolor = "success";
            $message = "Record updated successfully";
            $_SESSION['msgcolor'] = $msgcolor;
            $_SESSION['message'] = $message;
            
            
        } else{
            header("location: homepage_admin.php");
            $msgcolor = "danger";
            $message = "Unable to update record" . mysqli_error($conn);
            $_SESSION['msgcolor'] = $msgcolor;
            $_SESSION['message'] = $message; 
        }
    
        
    }

//}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/f517f78717.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    <title>Wheelchair Management System -Data Entry</title>
</head>


<body>
<header>
    <img src="images/logo.png" alt="Mustard Seed Logo" class="logo">
    <nav>
       <ul class="nav-area">
          <li><a href="../homepage.php">Home</a></li>
          <li><a href="#">Apostolates</a></li>
          <li><a href="../repairs.php">Repairs(<?php include('summary.php'); echo $_SESSION["totalrepairs"]?>)</a></li>
          <li><a href="#">View Residents</a></li>
          <li><a href="enterdata.php">Add Resident</a></li>
         
        <li> <i class="far fa-user-circle fa-lg"></i> <a href="#" class="nav-end-link"><?php echo $_SESSION["firstname"]." ".$_SESSION["lastname"]?></a></li>
        
       </ul>
    </nav>
    <div class = "nav-end">
    <a href="logout.php" class="btn-area">Logout</a>
       
    </div>
 </header>
    

    <section>
        <div class="hero-container">
           <div class="wrapper">
          <p>Enter Information on the resident</p>
        </div>
        </div>
  </section>


<section class="wrapper">
    <form class ="pure-form pure-form-stacked" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
    name = "enterdata" id="enterdata">
        <fieldset>

        <!-- <fieldset class="pure-group">
        <label for="textarea">Additional Notes</label>
        <textarea class="pure-input-1-2" placeholder="Enter recommendations here"  name = 'notes' cols="30" rows="10" required></textarea>
    </fieldset> -->


            <legend></legend>
        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-first-name">First Name</label>
                <input type="text" id="multi-first-name" name = "firstname" class="">
                <p id = "ferror"></p>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-last-name">Last Name</label>
                <input type="text" id="multi-last-name"  name = "lastname" class="">
                <p id = "lerror"></p>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-email">Date of Birth</label>
                <input type="date" id="dob" name = "dob" class="">
                
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="pure-input-1-2" >
                    <option value = "Select One">--Select One--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                 </select>
                 <p id = "gerror"></p>
            </div>

             <div class="pure-u-1 pure-u-md-1-3">
                <label for="multi-state">Apostolite</label>
                <select name="location" id="multi-state" class="pure-input-1-2" >
                    <option value = "Select One">--Select One--</option>
                    <option value="MFH:My Father House">My Father's House</option>
                    <option value="SP:Sophie Place">Sophie's Place</option>
                    <option value ="GOH:Gift of Hope">Gift of Hope</option>
                    <option value ="WM:Widow Mite">Widow's Mite</option>
                    <option value ="BA:Blessed Assurance">Blessed Assurance</option>
                    <option value ="M25:Matthew 25">Matthew 25</option>
                    <option value ="MH:Martha House">Martha's House</option>
                    <option value ="DTC:Dare to Care">Dare to Care</option>
                    <option value ="JC:Jacob Ladder">Jacob Ladder</option>
                    <option value ="MC:Mary Child">Mary's Child</option>
                </select>
                <p id="loerror"></p>
            </div>
           
        </div> 
       
        <button type="submit" name = "submit" class="pure-button pure-button-primary special">Submit</button>
        <a class = "cancel-link" onclick="window.history.back();">Cancel</a>
    </fieldset>

        </fieldset>


    </form>

</section>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>

// const form = document.getElementById('enterdata');
// let firstname = document.getElementById('firstname');
// let lastname = document.getElementById('lastname');
// let gender = document.getElementById('gender');
// let location = document.getElementById('location');
// let date = document.getElementById('date');

// form.addEventListener('submit',(e)=>{
//     e.preventDefault(); // Prevents form from submitting without data
//     checkinputs();

    
// });


// function validate()
// { 
// var firstname = document.enterdata.firstname;
// var lastname = document.enterdata.lastname.value;
// var gender = document.enterdata.gender.value; 
// var location = document.enterdata.location.value;
// let ferror = document.getElementById('ferror');
// let lerror = document.getElementById('lerror');
// let gerror = document.getElementById('gerror');
// let loerror = document.getElementById('loerror')

// if (firstname.value ==null || firstname.value =="" && lastname == null ||  lastname == "" && gender == "Select One" && location == 
// "Select One")
// { 

// ferror.style.color = "red";
// ferror.innerHTML = "Please enter data!"; 
// firstname.style.border = "1px solid red";
// lerror.style.color = "red";
// lerror.innerHTML = "Please enter data!"; 
// gerror.style.color = "red";
// gerror.innerHTML = "Please enter data!"; 
// loerror.style.color = "red";
// loerror.innerHTML = "Please enter data!"; 
// return false; 
// }


// return false; 
// }




</script>


</body>
</html>