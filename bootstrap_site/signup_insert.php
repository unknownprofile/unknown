<!--  
 - Filename: signup_insert.php
 - Created On: Dec. 12, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<!-- start -->
<?php
include "database_connection.php";
		$user_name=$_POST['user_name'];
		$user_add=$_POST['user_add'];
		$user_num=$_POST['user_num'];
		$user_birthdate=$_POST['user_birthdate'];
		$user_gender=$_POST['user_gender'];
		$user_email=$_POST['user_email'];
		$user_password=$_POST['user_password'];
		$user_cpassword=$_POST['user_cpassword'];
		
		if ($user_name && $user_add && $user_num && $user_birthdate && $user_gender && $user_num && $user_password && $user_cpassword && $user_email) {

			if ($user_password== $user_cpassword){
	
				$sql_username=mysql_query("SELECT * FROM $tbl_name WHERE user_name='$user_name' ") ;
				$sql_useremail=mysql_query("SELECT * FROM $tbl_name WHERE user_email='$user_email' ") ;

				// Mysql_num_row is counting table row
				$count=mysql_num_rows($sql_username);
				$count_email=mysql_num_rows($sql_useremail);
		
				// If result matched $myusername and $mypassword, table row must be 1 row
				if ($count!=0 && $count_email!=0)
				{
				echo "Name and email already exist";
				include("signup.php");
				die ();
				}
				if($count!=0){
				echo "Name already exist!";
				include("signup.php");
				die ();
				}
				 if ($count_email!=0){
				echo "email already exist!";
				include("signup.php");
				die ();
				}
// Register $username, $password and redirect to file "user_success.php"
				mysql_query("INSERT INTO $tbl_name(user_name, user_add, user_birthdate, user_gender, user_num, user_password, user_email) VALUES ('$user_name', '$user_add', '$user_birthdate', '$user_gender', '$user_num', '$user_password' , '$user_email')");

				echo "you have sucessfully sign up!";
				include("user_dashboard.php");
			}
			else {
				echo "your Password did not match!";
				include("signup.php");
			}
	
		}
		//end password and user confirmation
?>
<!-- end -->