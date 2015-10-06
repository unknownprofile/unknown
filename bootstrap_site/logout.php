<!--  
 - Filename: logout.php
 - Created On: Dec. 10, 2014
 - Version: 1
 - Author: Cheen Rodriguez <cheen.rodriguez@greyandgreentech.com>  
-->

<?php

@session_unset();
session_destroy();
header ("location:index.php ");
?>
