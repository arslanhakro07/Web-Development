<?php
session_start();

// echo $first_name." ".$last_name;
echo "wellcome....../".$_SESSION['first_name']." ".$_SESSION['last_name'];

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

header("location:page_3.php");

?>