<?php

session_start();

if (isset($_SESSION["uname"])) {
	session_destroy();
	header("location:index.php");
}else{
	header("location:index.php");
}


?>