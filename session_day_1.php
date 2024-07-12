<?php

session_start();

// Client= 		kiujdhclmnm96f62rfnpcge9ne
// Server=    sess_kiujdhclmnm96f62rfnpcge9ne 

// session_destroy();

$first_name = "Ali"; // Local Variable
$last_name	= "Khan";

// echo $first_name." ".$last_name;

$_SESSION['first_name'] = "Muhammad";
$_SESSION['last_name']  = "Yaseen";
$_SESSION['email']		= "myaseenys@yahoo.com";

$_SESSION['Contact_Number'] = 031;

echo $_SESSION['first_name']." ".$_SESSION['last_name'];

$_SESSION['count_1'] = 0;

?>