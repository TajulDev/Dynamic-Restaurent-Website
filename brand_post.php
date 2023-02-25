<?php 
session_start();
require_once 'includes/db.php';

$image_name = $_FILES['brand_image']['name'];
$name_after_explod = explode(".", $image_name);
$extention = end($name_after_explod);


//image upload start
$image_new_name = time()."-".rand(100,999).".".$extention;
$temp_location = $_FILES['brand_image']['tmp_name'];
$new_location = "img/brand_image/". $image_new_name;
move_uploaded_file($temp_location, $new_location);
//image upload end

$insert_query = "INSERT INTO brands (brand_image_name) VALUES ('$image_new_name')";
mysqli_query($db_connect, $insert_query);
$_SESSION['status'] = "Brand image added successfully";
header('location: brand.php');

?>