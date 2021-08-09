<?php 
include('dbconn.php');
          
$gohtotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'GOH'");
$row = mysqli_fetch_array($gohtotalres);
$totalgoh = $row[0];

$wheelchairgoh = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'GOH' and wheelchairbound = 'Yes'");
$row1 = mysqli_fetch_array($wheelchairgoh);
$wheelchairtotalgoh = $row1[0];

$femalegoh = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'GOH' and gender = 'Female'");
$row2 = mysqli_fetch_array($femalegoh);
$totalfemalegoh = $row2[0];

$malegoh = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'GOH' and gender = 'Male'");
$row3 = mysqli_fetch_array($malegoh);
$totalmalegoh = $row3[0];

$totalresjer = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JER'");
      $row = mysqli_fetch_array($totalresjer);
      $totaljer= $row[0];

      $wheelchairjer = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JER' and wheelchairbound = 'Yes'");
      $row1 = mysqli_fetch_array($wheelchairjer);
      $wheelchairtotaljer = $row1[0];

      $femalejer = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JER' and gender = 'Female'");
      $row2 = mysqli_fetch_array($femalejer);
      $totalfemalejer = $row2[0];

      $malejer = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JER' and gender = 'Male'");
      $row3 = mysqli_fetch_array($malejer);
      $totalmalejer= $row3[0];

 $mfhtotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'MFH'");
      $row = mysqli_fetch_array($mfhtotalres);
      $mfhtotal = $row[0];

      $mfhwheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'MFH' and wheelchairbound = 'Yes'");
      $row1 = mysqli_fetch_array($mfhwheelchair);
      $mfhwheelchairtotal = $row1[0];

      $mfhfemale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'MFH' and gender = 'Female'");
      $row2 = mysqli_fetch_array($mfhfemale);
      $mfhtotalfemale= $row2[0];

      $mfhtotalmale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'MFH' and gender = 'Male'");
      $row3 = mysqli_fetch_array($mfhtotalmale);
      $mfhtotalmale = $row3[0];


$sptotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP'");
      $row = mysqli_fetch_array($sptotalres);
      $sptotal = $row[0];

      $spwheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and wheelchairbound = 'Yes'");
      $row1 = mysqli_fetch_array($spwheelchair);
      $spwheelchairtotal = $row1[0];

      $spfemale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and gender = 'Female'");
      $row2 = mysqli_fetch_array($spfemale);
      $sptotalfemale = $row2[0];

      $spmale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'SP' and gender = 'Male'");
      $row3 = mysqli_fetch_array($spmale);
      $sptotalmale = $row3[0];



      $countrepairs = mysqli_query($conn,"SELECT Count(*) FROM tblresidentdata where notes !=''");
      $countrow = mysqli_fetch_array($countrepairs);
      $totalrepairs = $countrow[0];
?>