<?php
include_once("Database.php");

if (isset($_POST['submit']))
 {
 	$movie_name= mysqli_real_escape_string($conn,$_POST['movie_name']);
 	$directer_name= mysqli_real_escape_string($conn,$_POST['directer_name']);
	$release_date= mysqli_real_escape_string($conn,$_POST['release_date']);
	$categroy= mysqli_real_escape_string($conn,$_POST['category']);
	$language= mysqli_real_escape_string($conn,$_POST['language']);
	$tailer= mysqli_real_escape_string($conn,$_POST['tailer']);
	$action= mysqli_real_escape_string($conn,$_POST['action']);
	$decription= mysqli_real_escape_string($conn,$_POST['decription']);
	$show= mysqli_real_escape_string($conn,implode(',',$_POST['show']));
	$filename=$_FILES['img']['name'];

$location='image/'.$filename;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

if(in_array($file_extension,$image_ext)){
	if(move_uploaded_file($_FILES['img']['tmp_name'],$location)){
		$response=$location;
	}
}
echo $response;

$status=1;
	$insert_record=mysqli_query($conn,"INSERT INTO add_movie (`movie_name`,`directer`,`release_date`,`categroy`,`language`,`you_tube_link`,`action`,`decription`,`show`,`image`,`status`)VALUES('".$movie_name."','".$directer_name."','".$release_date."','".$categroy."','".$language."','".$tailer."','".$action."','".$decription."','".$show."','".$filename."','".$status."')");
	if(!$insert_record){
	 	echo "unsuccesfull";
	}
	else
{
	echo "<script> window.location.href='Add-movie.php' </script>";
}


}




if (isset($_POST['updatemovie']))
 {
 	$e_id= mysqli_real_escape_string($conn,$_POST['e_id']);
 	$edit_movie_name= mysqli_real_escape_string($conn,$_POST['edit_movie_name']);
 	$edit_directer_name= mysqli_real_escape_string($conn,$_POST['edit_directer_name']);	
	$edit_categroy= mysqli_real_escape_string($conn,$_POST['edit_category']);
	$edit_language= mysqli_real_escape_string($conn,$_POST['edit_language']);
	$tailer= mysqli_real_escape_string($conn,$_POST['edit_tailer']);
	$action= mysqli_real_escape_string($conn,$_POST['edit_action']);
	$decription= mysqli_real_escape_string($conn,$_POST['decription']);
	$edit_show= mysqli_real_escape_string($conn,implode(',',$_POST['show']));
	$edit_old_image= mysqli_real_escape_string($conn,$_POST['old_image']);
	$edit_filename=$_FILES['edit_img']['name'];

if($edit_filename != ''){
	$image=$edit_filename;
	$location='image/'.$image;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

if(in_array($file_extension,$image_ext)){
	if(move_uploaded_file($_FILES['edit_img']['tmp_name'],$location)){
		$response=$location;
	}
}
echo $response;


}else{
	$image=$edit_old_image;
}



		$insert_record=mysqli_query($conn, "UPDATE `add_movie` SET `movie_name` = '$edit_movie_name', `directer` = '$edit_directer_name', `categroy` = '$edit_categroy', `language` = '$edit_language',`you_tube_link` = '$tailer',`action` = '$action',`decription` = '$decription', `show` = '$edit_show', `image` = '$image' WHERE `id` = '$e_id'"); 

	if(!$insert_record){
	 	echo "unsuccesfull";
	}
	else
{
	echo "<script> window.location.href='Add-movie.php' </script>";
}

}




if (isset($_POST['deletemovie']))
 {
 	$id= mysqli_real_escape_string($conn,$_POST['id']);

 	$sql = mysqli_query($conn,"DELETE FROM add_movie WHERE id=$id");
 	echo "<script> window.location.href='Add-movie.php' </script>";
 }




if (isset($_POST['addshow']))
 {
 	$theater= mysqli_real_escape_string($conn,$_POST['theater']);
 	$show= mysqli_real_escape_string($conn,$_POST['show']);

$status=1;
	$insert_record=mysqli_query($conn,"INSERT INTO theater_show (`show`,`theater`)VALUES('".$show."','".$theater."')");
	if(!$insert_record){
	 	echo "hii";
	}
	else
{
	echo "<script> window.location.href='Theater_and_show.php' </script>";
}

}




if (isset($_POST['updatetime']))
 {
 	$e_id= mysqli_real_escape_string($conn,$_POST['e_id']);
 	$edit_screen= mysqli_real_escape_string($conn,$_POST['edit_screen']);
 	$edit_time= mysqli_real_escape_string($conn,$_POST['edit_time']);	




	$insert_record=mysqli_query($conn, "UPDATE `theater_show` SET `theater` = '$edit_screen', `show` = '$edit_time' WHERE `id` = '$e_id'"); 

	if(!$insert_record){
	 	echo "unsuccesfull";
	}
	
{
echo "<script> window.location.href='Theater_and_show.php' </script>";
}

}




if (isset($_POST['deletetime']))
 {
 	$id= mysqli_real_escape_string($conn,$_POST['id']);

 	$sql = mysqli_query($conn,"DELETE FROM theater_show WHERE id=$id");
 	echo "<script> window.location.href='Theater_and_show.php' </script>";
 }





if (isset($_POST['add_feedback']))
 {
 	$name= mysqli_real_escape_string($conn,$_POST['name']);
 	$email= mysqli_real_escape_string($conn,$_POST['email']);
 	$massage= mysqli_real_escape_string($conn,$_POST['massage']);

$status=1;
	$insert_record=mysqli_query($conn,"INSERT INTO feedback (`name`,`email`,`massage`)VALUES('".$name."','".$email."','".$massage."')");
	if(!$insert_record){
	 	echo "hii";
	}
	else
{
	echo "<script> window.location.href='feedback.php' </script>";
}

}




if (isset($_POST['updatefeedback']))
 {
 	$e_id= mysqli_real_escape_string($conn,$_POST['e_id']);
 	$edit_feedback_name= mysqli_real_escape_string($conn,$_POST['edit_feedback_name']);
 	$edit_feedback_email= mysqli_real_escape_string($conn,$_POST['edit_feedback_email']);	
	$edit_feedback_massage= mysqli_real_escape_string($conn,$_POST['edit_feedback_massage']);



	$insert_record=mysqli_query($conn, "UPDATE `feedback` SET `name` = '$edit_feedback_name', `email` = '$edit_feedback_email', `massage` = '$edit_feedback_massage' WHERE `id` = '$e_id'"); 

	if(!$insert_record){
	 	echo "unsuccesfull";
	}
	
{
echo "<script> window.location.href='feedback.php' </script>";
}

}



if (isset($_POST['deletefeedback']))
 {
 	$id= mysqli_real_escape_string($conn,$_POST['id']);

 	$sql = mysqli_query($conn,"DELETE FROM feedback WHERE id=$id");
 	echo "<script> window.location.href='feedback.php' </script>";
 }



 if (isset($_POST['add_user']))
 {
 	$username= mysqli_real_escape_string($conn,$_POST['username']);
 	$email= mysqli_real_escape_string($conn,$_POST['email']);
 	$mobile= mysqli_real_escape_string($conn,$_POST['mobile']);
 	$city= mysqli_real_escape_string($conn,$_POST['city']);
 	$password= mysqli_real_escape_string($conn,$_POST['password']);
 	$filename=$_FILES['img']['name'];

$location='image/'.$filename;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

if(in_array($file_extension,$image_ext)){
	if(move_uploaded_file($_FILES['img']['tmp_name'],$location)){
		$response=$location;
	}
}
echo $response;



	$insert_record=mysqli_query($conn,"INSERT INTO user (`username`,`email`,`mobile`,`city`,`password`,`image`)VALUES('".$username."','".$email."','".$mobile."','".$city."','".$password."','".$filename."')");
	if(!$insert_record){
	 	echo "hii";
	}
	else
{
	echo "<script> window.location.href='users.php' </script>";
}

}


if (isset($_POST['updateusers']))
 {
 	$e_id= mysqli_real_escape_string($conn,$_POST['e_id']);
 	$edit_Username= mysqli_real_escape_string($conn,$_POST['edit_username']);
 	$edit_email= mysqli_real_escape_string($conn,$_POST['edit_email']);	
	$edit_mobile= mysqli_real_escape_string($conn,$_POST['edit_mobile']);
	$edit_city= mysqli_real_escape_string($conn,$_POST['edit_city']);
	$edit_password= mysqli_real_escape_string($conn,$_POST['edit_password']);
	$edit_old_image= mysqli_real_escape_string($conn,$_POST['old_image']);
	$edit_filename=$_FILES['edit_img']['name'];

if($edit_filename != ''){
	$image=$edit_filename;
	$location='image/'.$image;



$file_extension=pathinfo($location,PATHINFO_EXTENSION);
$file_extension=strtolower($file_extension);
$image_ext=array('jpg','png','jpeg','gif');

$response=0;

if(in_array($file_extension,$image_ext)){
	if(move_uploaded_file($_FILES['edit_img']['tmp_name'],$location)){
		$response=$location;
	}
}
echo $response;


}else{
	$image=$edit_old_image;
}



		$update_record=mysqli_query($conn, "UPDATE `user` SET `username` = '$edit_Username', `email` = '$edit_email', `mobile` = '$edit_mobile', `city` = '$edit_city',`password` = '$edit_password', `image` = '$image' WHERE `id` = '$e_id'"); 

	if(!$update_record){
	 	echo "unsuccesfull";
	}
	else
{
echo "<script> window.location.href='users.php' </script>";
}

}



if (isset($_POST['deleteuser']))
 {
 	$id= mysqli_real_escape_string($conn,$_POST['id']);

 	$sql = mysqli_query($conn,"DELETE FROM user WHERE id=$id");
 	echo "<script> window.location.href='users.php' </script>";

 	
 }



 if (isset($_POST['customers']))
 {
 	$username_id= mysqli_real_escape_string($conn,$_POST['username_id']);
 	$movie= mysqli_real_escape_string($conn,$_POST['movie']);
 	$show_time= mysqli_real_escape_string($conn,$_POST['show_time']);
 	$seat= mysqli_real_escape_string($conn,$_POST['seat']);
 	$totalseat= mysqli_real_escape_string($conn,$_POST['totalseat']);
 	$price= mysqli_real_escape_string($conn,$_POST['price']);
 

 	$custemer_id= mt_rand();
    $payment = date("D-m-y ",strtotime('today'));
    $booking = date("D-m-y ",strtotime('tomorrow'));

$status=1;
	$insert_record=mysqli_query($conn,"INSERT INTO customers (`uid`,`movie`,`show_time`,`seat`,`totalseat`,`price`,`payment_date`,`booking_date`,`custemer_id`)VALUES('".$username_id."','".$movie."','".$show_time."','".$seat."','".$totalseat."','".$price."','".$payment."','".$booking."','".$custemer_id."')");
	if(!$insert_record){
	 	echo "hii";
	}
	else
{
	echo "<script> window.location.href='customers.php' </script>";
}

}
