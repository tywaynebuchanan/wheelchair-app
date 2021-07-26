  
<?php
$conn_error = "Could not connect";
$db_host = 'us-cdbr-east-04.cleardb.com';
$db_user ='b2d5ec8d1a0f17';
$db_password ='330c4802';
$mysql_db ='wheelchairapp';
$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');

?>