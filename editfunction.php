<?php
session_start();
// $message = "";
$name = $_GET['edit'];
if($_SERVER["REQUEST_METHOD"] == "POST" & !empty("POST"))
{

    $notes = $_POST['notes'];
//     $image1 = "images/noimage.jpg";
//     $image2 = "images/noimage.jpg";
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $dob = $_POST['dob'];
//     $location = $_POST['location'];
//     $gender = $_POST['gender'];
    
//  $location_explode = explode(':',$location);
//  $location = $location_explode[0];
//  $location2 = $location_explode[1];

//  $today = date("Y-m-d");
//  $age = date_diff(date_create($dob),date_create($today));
//  $realage = strval($age->format('%y'));
 
$name = $_GET['edit'];
$query = mysqli_query($conn,"SELECT firstname,lastname FROM tblresidentdata Where id = '$name'");
if($query->num_rows > 0){
    while($row = mysqli_fetch_assoc($query))
    {
       $firstname = $row['firstname'];   
       $lastname = $row['lastname'];   
       echo "<h4>".$firstname." ".$lastname."</h4>";
          
    }
   }



    // $query = "INSERT INTO tblresidentdata (`image1`,`image2`,`firstname`,`lastname`,`location`,`location1`,`age`,`dob`,`gender`) VALUES ('$image1','$image2','$firstname','$lastname','$location2','$location','$realage','$dob','$gender')";

    $query1 = "UPDATE tblresidentdata SET notes = '$notes' WHERE id = '$name'";
      if(mysqli_query($conn, $query1)){
          header('Location: mfh/mfh.php');
       $_SESSION['message'] =  "Addition notes for" .$firstname." ".$lastname." was added successfully.";
       $_SESSION['messagecolor'] = "success";
    } else{
        header('Location: mfh/mfh.php');
        $_SESSION['message'] = "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
        $_SESSION['messagecolor'] = "danger";
    }

    mysqli_close($conn);
}

?>