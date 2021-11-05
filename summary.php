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



      $batotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'BA'");
      $barow = mysqli_fetch_array($batotalres);
      $batotal = $barow[0];

      $bawheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'BA' and wheelchairbound = 'Yes'");
      $barow1 = mysqli_fetch_array($bawheelchair);
      $bawheelchairtotal = $barow1[0];

      $bafemale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'BA' and gender = 'Female'");
      $barow2 = mysqli_fetch_array($bafemale);
      $batotalfemale = $barow2[0];

      $bamale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'BA' and gender = 'Male'");
      $barow3 = mysqli_fetch_array($bamale);
      $batotalmale = $barow3[0];


     
      $wmtotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'WM'");
      $wmrow = mysqli_fetch_array($wmtotalres);
      $wmtotal = $wmrow[0];

      $wmwheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'WM' and wheelchairbound = 'Yes'");
      $wmrow1 = mysqli_fetch_array($wmwheelchair);
      $wmwheelchairtotal = $wmrow1[0];

      $wmfemale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'WM' and gender = 'Female'");
      $wmrow2 = mysqli_fetch_array($wmfemale);
      $wmtotalfemale = $wmrow2[0];

      $wmmale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'WM' and gender = 'Male'");
      $wmrow3 = mysqli_fetch_array($wmmale);
      $wmtotalmale = $wmrow3[0];

      $jltotalres = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JL'");
      $jlrow = mysqli_fetch_array($jltotalres);
      $jltotal = $jlrow[0];

      $jlwheelchair = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JL' and wheelchairbound = 'Yes'");
      $jlrow1 = mysqli_fetch_array($jlwheelchair);
      $jlwheelchairtotal = $jlrow1[0];

      $jlfemale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JL' and gender = 'Female'");
      $jlrow2 = mysqli_fetch_array($jlfemale);
      $jltotalfemale = $jlrow2[0];

      $jlmale = mysqli_query($conn,"SELECT Count(1)FROM tblresidentdata WHERE location1 = 'JL' and gender = 'Male'");
      $jlrow3 = mysqli_fetch_array($jlmale);
      $jltotalmale = $jlrow3[0];


      $countrepairs = mysqli_query($conn,"SELECT Count(*) FROM tblrepairs");
      $countrow = mysqli_fetch_array($countrepairs);
      $totalrepairs = $countrow[0];
      $_SESSION["totalrepairs"] = $totalrepairs;

      $total_query = mysqli_query($conn,"SELECT Count(*) from tblresidentdata");
      $totalcount = mysqli_fetch_array($total_query);
      $totalres = $totalcount[0];

      $total_male =mysqli_query($conn,"SELECT count(*) from tblresidentdata WHERE gender = 'Male'");
      $total_male_count = mysqli_fetch_array($total_male);
      $total_male_result = $total_male_count[0];

      $total_female =mysqli_query($conn,"SELECT count(*) from tblresidentdata WHERE gender = 'Female'");
      $total_female_count = mysqli_fetch_array($total_female);
      $total_female_result = $total_female_count[0];

      $total_wc = mysqli_query($conn,"SELECT count(*) from tblresidentdata WHERE wheelchairbound = 'Yes'");
      $total_wc_count = mysqli_fetch_array($total_wc);
      $total_wc_result = $total_wc_count[0];

