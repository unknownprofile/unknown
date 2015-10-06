<!--  
 - Filename: contact_send.php
 - Created On: Dec. 18, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start  -->
<?php 
session_start();

if(isset($_POST['contact_send']))
{
include "database_connection.php";

mysql_select_db("fish", $con);
		$name= $_POST['contact_name'];
		$email= $_POST['contact_email'];
		$subject= $_POST['contact_subject'];
		$message= $_POST['contact_message'];
		mysql_query("INSERT INTO contact (contact_name, contact_email, contact_subject, contact_message) VALUES ('$name','$email','$subject','$message')");
		
		header ("location:contact.php");
}
?>
<!-- end -->