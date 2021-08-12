<?php
session_start();
$id = $_GET['edit'];
if($_SERVER["REQUEST_METHOD"] == "POST" & !empty("POST"))
{


    $id = $_GET['edit'];
    $query = mysqli_query($conn,"SELECT firstname,lastname FROM tblresidentdata Where id = '$id'");
    if($query->num_rows > 0){
        while($row = mysqli_fetch_assoc($query))
        {
           $firstname = $row['firstname']; 
           $lastname = $row['lastname'];  
                      
        }
       }
    //Variables

    $selfpropel = mysqli_escape_string($conn,$_POST['selfpropel']);
    $foothand = mysqli_escape_string($conn,$_POST['foothand']);
    $reuse = mysqli_escape_string($conn,$_POST['reuse']);
    $currentchair = mysqli_escape_string($conn,$_POST['currentchair']);
    $a = mysqli_escape_string($conn,$_POST['a']);
    $b = mysqli_escape_string($conn,$_POST['b']);
    $c = mysqli_escape_string($conn,$_POST['c']);
    $d = mysqli_escape_string($conn,$_POST['d']);
    $e = mysqli_escape_string($conn,$_POST['e']);
    $f = mysqli_escape_string($conn,$_POST['f']);
    $g = mysqli_escape_string($conn,$_POST['g']);
    $h = mysqli_escape_string($conn,$_POST['h']);
    $i = mysqli_escape_string($conn,$_POST['i']);
    $typechair = mysqli_escape_string($conn,$_POST['typechair']);
    $typechairother = mysqli_escape_string($conn,$_POST['typechairother']);
    $typeback = mysqli_escape_string($conn,$_POST['typeback']);
    $typebackother = mysqli_escape_string($conn,$_POST['typebackother']);
    $laterals = mysqli_escape_string($conn,$_POST['laterals']);
    $lateralsize = mysqli_escape_string($conn,$_POST['lateralsize']);

    $query1 = "UPDATE `tblresidentdata` SET `currentchair`='$currentchair',`selfpropel`='$selfpropel',`foothand`='$foothand',
    `resuable`='$reuse',`typeofchair`='$typchair',`other`='$typechairother',`backneeded`='$typeback',`otherback` = '$typebackother',
    `laterals`='$laterals',`sizelaterals`='$lateralsize',`shoulderwidth`='$a',`chestwidth`='$b',
    `hipwidth`='$c',`widthatknee`='$d',`sth`='$e',`sta`='$f',
    `chestdepth`='$g',`seatdepth`='$h',`stfp`='$i' WHERE id = $id";

     if(mysqli_query($conn, $query1)){
          header('Location: mfh/mfh.php');
       $_SESSION['message'] =  "Wheelchair Information was added for " .$firstname." ".$lastname."";
       $_SESSION['messagecolor'] = "success";
    } else{
        header('Location: mfh/mfh.php');
        $_SESSION['message'] = "ERROR: Could not able to execute $query1. " . mysqli_error($conn);
        $_SESSION['messagecolor'] = "danger";
    }

    mysqli_close($conn);
}

?>