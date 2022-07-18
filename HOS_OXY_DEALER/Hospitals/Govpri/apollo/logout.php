<?php 

session_start();
$_SESSION['username']="";
session_destroy();

header("Location: \Covi+\HOS_OXY_DEALER\login_hos.php");



?>