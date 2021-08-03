<!-- <?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
   -->

<?php
$conn_error = "Could not connect";
$db_host = 'localhost';
$db_user ='root';
$db_password ='';
$mysql_db ='wheelchairapp';
$conn = mysqli_connect($db_host,$db_user,$db_password) or die ('The username or password is incorrect');
mysqli_select_db($conn,$mysql_db) or die('Not such database present');
?> 
