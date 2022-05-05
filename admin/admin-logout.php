<?php

session_start();

if (isset($_SESSION["admin"])) {
	session_destroy();
	header("location:login.php");
}else{
	header("location:about.php");
}


?>