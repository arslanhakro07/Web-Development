<?php
session_start();

echo "/Header/";

$page = 0;


if($page == 1){

	header("location:session_day_1.php");
}
elseif($page == 2){

	header("location:session_day_1_page_2.php");

}

elseif($page == 3){

	header("location:page_3.php");

}

/*$hist = "hidaya trust";

$_Session["hist"] = "Hidaya trust";//Local Variable

echo $_Session["hist"];*/





?>