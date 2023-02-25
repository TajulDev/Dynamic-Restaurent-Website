<?php
session_start();
require_once 'includes/db.php';

$portfolio_title = $_POST['portfolio_title'];
$portfolio_details = $_POST['portfolio_details'];
$post_by = $_SESSION['email_address_from_login_page'];



$feature_image_name = $_FILES['portfolio_feature_photo']['name'];
$name_after_explod = explode(".", $feature_image_name);
$extention = end($name_after_explod);


 //image upload start
$feature_image_new_name = time()."-".rand(1000,9999).".".$extention;
$temp_location = $_FILES['portfolio_feature_photo']['tmp_name'];
$new_location = "image/". $feature_image_new_name;
move_uploaded_file($temp_location, $new_location);
 //image upload end

$insert_query = "INSERT INTO portfolios (post_by,portfolio_title,portfolio_details,portfolio_feature_photo) VALUES ('$post_by', '$portfolio_title', '$portfolio_details', '$feature_image_new_name')";
mysqli_query($db_connect, $insert_query);
$_SESSION['status'] = "Portfolio added successfully";
header('location: portfolio.php');


?>
