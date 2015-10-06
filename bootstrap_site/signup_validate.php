<!--  
 - Filename: signup_validate.php
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

//start validations
//validate email
if (strpos($_POST["user_email"], "@")<1 or strpos($_POST["user_email"], ".")<strpos($_POST["user_email"], "@")+2 or strpos($_POST["user_email"], ".")+2>=strlen($_POST["user_email"]) or strlen($_POST["user_email"])<8)
{
$validemail=0;
}
else
{
  $validemail=1;
  //validate username
  $usernamelength=strlen($_POST["user_email"]);
  if ($usernamelength<3 or $usernamelength>11)
  {
    $validusername=0;
  }
  else
  {
    $validusername=1;
    //validate password
    $passwordlength=strlen($_POST["user_password"]);
    if ($passwordlength<6 or $passwordlength>12)
    {
      $validpassword=0;
    }
    else
    {
      $validpassword=1;
      //validate password confirmation
      if ($_POST["user_password"]==$_POST["user_cpassword"])
      {
      $validpassconfirm=1;
	  echo "confirm";
      }
      else
      {
      $validpassconfirm=0;
	  echo "not confirm pass";
      }
    }
  }
}
//end validations
?>
<!-- end -->