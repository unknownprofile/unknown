<!--  
 - Filename: signup_success.php
 - Created On: Dec. 18, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start  -->
<?php 
include "database_connection.php";

error_reporting (0);
session_start();

if(isset($_POST['send']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("message", $con);
		$message= $_POST['message'];
		$name= $_POST['name'];
		$email= $_POST['email'];
		mysql_query("INSERT INTO Contacts (name, email, message) VALUES ('$name','$email','$message')");
		
		header ("location:user_dashboard.php");
}
?>
<!-- end -->