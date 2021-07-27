  
<?php
$conn_error = "Could not connect";
$db_host = "mysql-41134-0.cloudclusters.net";
$db_user ="admin";
$db_password ="uwzBiAbY";
$port = "19703";
$mysql_db ="wms";
$conn = mysqli_connect($db_host,$db_user,$db_password,$port) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');

?>