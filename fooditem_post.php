<?php
session_start();
require_once 'includes/db.php';

$foods_title = $_POST['foods_title'];
$foods_details = $_POST['foods_details'];
$post_by = $_SESSION['email_address_from_login_page'];



$feature_image_name = $_FILES['food_photo']['name'];
$name_after_explod = explode(".", $feature_image_name);
$extention = end($name_after_explod);


 //image upload start
$feature_image_new_name = time()."-".rand(1000,9999).".".$extention;
$temp_location = $_FILES['food_photo']['tmp_name'];
$new_location = "image/portfolio_image/". $feature_image_new_name;
move_uploaded_file($temp_location, $new_location);
 //image upload end

$insert_query = "INSERT INTO foods (post_by,foods_title,foods_details,food_photo) VALUES ('$post_by', '$foods_title', '$foods_details', '$feature_image_new_name')";
mysqli_query($db_connect, $insert_query);
$_SESSION['status'] = "Foods added successfully";
header('location: fooditem.php');


?>
