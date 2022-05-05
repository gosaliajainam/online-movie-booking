<?php
include "Database.php";

$email = mysqli_real_escape_string($conn,$_POST['email']);
$oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);


$sql_query = "SELECT * FROM user WHERE email='".$email."' and password='".$oldpassword."'";
$result = mysqli_query($conn,$sql_query);
$row = mysqli_fetch_array($result);
$id = $row['id'];
if($row){
     $insert_record=mysqli_query($conn, "UPDATE `user` SET `password` = '$newpassword' WHERE `id` = '$id'"); 
     echo 1;
}else{
    echo "<li>Invlid Username or password.</li>";
    exit();
}