<?php
session_start();
require_once 'includes/db.php';
if(!$_FILES['new_profile_image']['name']){
   echo "No Files Choosen yet";
   die();
}

$image_name = $_FILES['new_profile_image']['name'];
$name_after_explod = explode(".", $image_name);
$extention = end($name_after_explod);
$accepted_extentions = ['png', 'jpg', 'jpeg', 'JPG', 'PNG', 'JPEG'];

if(!in_array($extention, $accepted_extentions)){
   echo "This File is not accepted";
   die();
}

if($_FILES['new_profile_image']['size'] > 50000){
   echo "Your File should be less than 50 Kb";
   die();
}


$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$get_id_query = "SELECT id, profile_img FROM users WHERE email_address = '$email_address_from_login_page'";
$user_id = mysqli_fetch_assoc(mysqli_query($db_connect, $get_id_query))['id'];
echo $db_profile_image_name = mysqli_fetch_assoc(mysqli_query($db_connect, $get_id_query))['profile_img'];

if($db_profile_image_name != "defoultPP.png"){
   unlink("img/profile_img/".$db_profile_image_name);
}

//image upload start
$image_new_name = $user_id.".".$extention;
$temp_location = $_FILES['new_profile_image']['tmp_name'];
$new_location = "img/profile_img/". $image_new_name;
move_uploaded_file($temp_location, $new_location);
//image upload end

//database update startd

$update_query = "UPDATE users SET profile_img = '$image_new_name' WHERE email_address = '$email_address_from_login_page'";
mysqli_query($db_connect, $update_query);
header('location: profile.php');
//database update end

?>