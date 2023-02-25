<?php
require_once 'includes/db.php';
$picture_name = $_GET['picture_name'];
unlink("img/profile_img/".$picture_name);
$update_query = "UPDATE users SET profile_img = 'defoultPP.png' WHERE profile_img = '$picture_name'";
mysqli_query($db_connect, $update_query);
header('location: profile.php');
?>
