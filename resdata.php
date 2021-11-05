<section>
 <div class="col-2">
            <p>Resident Name</p>
            <h1><?php echo $firstname." ".$lastname?></h1>
            <p><strong>Location:</strong> <?php echo $location?></p>
            <p><strong>Approx Age: </strong><?php echo $age?></p>
            <p><strong>Date of Birth: </strong><?php echo $dob?></p>
            <p><strong>Sex:</strong> <?php echo $gender?></p>
            <h3>Evaluation Form</h3>
            <button class = "btn-modal" id="openmodal"><i class="far fa-file-pdf"></i> View Evaluation Form</button>
          
            <!-- <p><strong>Current Chair: </strong><?php echo $chair?></p>
            <p><strong>Self Propel?: </strong><?php echo $propel?></p>
            <p><strong>Foot/Hand:</strong> <?php echo $foothand?> </p>
            <p><strong>Re-usable for a another resident?: </strong><?php echo $resue?></p>
            <p><strong>Size: </strong><?php echo $size?></p>
            <p><strong>Pelvic Obliquity?: </strong><?php echo $pelvicobliquity ?></p>
            <p><strong> Low Side: </strong><?php echo $lowside?></p>
            <p><strong>Type of Chair Needed: </strong><?php echo $typeofchair?></p>
            <p><strong>Type of Back Needed: </strong><?php echo $backneeded?></p>
            <p><strong>Laterals: </strong><?php echo $laterals?></p>
            <p><strong>Size: </strong><?php echo $sizelats?></p> -->
            
            <p><?php echo $notes?></p>
            
            <h3>Additional Notes</h3>
            <button class="btn" id="button">
                      <span class="button_icon"><i class="fas fa-plus"></i></span><span class="button_text">Show Measurements</span>
                    </button>
            <table class = "table hidetable" id="table">
                            <tbody>
                                <tr><td>A- Shoulder Width: <?php echo $shoulder?></td></tr>
                                <tr><td>B- Chest Width: <?php ?></td></tr>
                                <tr><td>C- Hip Width: <?php ?> </td></tr>
                                <tr><td>D-Width at Knee: <?php echo $chest?></td></tr>
                                <tr><td>E-Seat to Top of Head: <?php echo $hip?></td></tr>
                                <tr><td>F-Seat to Top of Shoulder (L, R): <?php echo $wknee?></td></tr>
                                <tr><td>G-Seat to Axilla (L,R) Armpit: <?php echo $sth?></td></tr>
                                <tr><td>H- Chest Depth (L,R) Back to Tip of Chest: <?php echo $sta?> </td></tr>
                                <tr><td>I. Seat Depth (L,R) Actual - 2-3 Fingers: <?php echo $seatdepth?></td></tr>
                                <tr><td>J- Seat to Footplate (L,R): <?php echo $stfp?></td></tr>
                             </tbody>
                           </table>
                           
        </div>
    </div>
    
</div>


<div class="container hidetable" id="modal">
    <div class = "modal">
        <div>
        <button class="btn-modal" id="closemodal">Close Evaluation Form </button>
        </div>
    
    <embed src="<?php echo $evalform?>" style = "width:100%; height:620px;" type="application/pdf"/>
               
    </div>

</div>


</section>