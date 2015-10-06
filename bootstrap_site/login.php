<!--  
 - Filename: database_connection.php
 - Created On: Dec. 12, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start -->
<?php 
	session_start(); 
?>
<?php
include "database_connection.php";

// username and password sent from form
$user_email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$user_email = stripslashes($user_email);
$password = stripslashes($password);
$user_email = mysql_real_escape_string($user_email);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE user_email='$user_email' and user_password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $username, $password and redirect to file "user_success.php"

header("location:user_dashboard.php");
}
else {
header("location:signup.php");
}
?>
<!-- end -->