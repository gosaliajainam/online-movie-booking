<?php
include_once "Database.php";

if($_POST['feedbackname'] != '' && $_POST['feedbackemail'] != '' && $_POST['feedbackmassage'] != '')
{

	$feedback_name = mysqli_real_escape_string($conn,$_POST['feedbackname']);
	$feedback_email = mysqli_real_escape_string($conn,$_POST['feedbackemail']);
	$feedback_massage = mysqli_real_escape_string($conn,$_POST['feedbackmassage']);
	
	$insert_record=mysqli_query($conn,"INSERT INTO feedback (`name`,`email`,`massage`)VALUES('".$feedback_name."','".$feedback_email."','".$feedback_massage."')");

	if(!$insert_record)
	{
		echo 2;
	}else{
		echo 1;
	}
}

?>