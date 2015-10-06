<!--  
 - Filename: database_connection.php
 - Created On: Dec. 18, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start -->
<?php
$host="localhost"; // Host name
$server_name="root"; // Mysql username
$server_password=""; // Mysql password
$db_name="fish"; // Database name
$tbl_name="user"; // Table name


// Connect to server and select databse.
mysql_connect("$host", "$server_name", "$server_password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
<!-- end -->