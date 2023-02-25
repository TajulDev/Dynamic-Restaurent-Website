<?php
session_start();
require_once 'includes/db.php';
   
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$old_full_name = $_POST['old_full_name'];
$email_address = $_POST['email_address'];
$gender = $_POST['gender'];


$update_query = "UPDATE users SET full_name = '$full_name', email_address = '$email_address', gender = '$gender' WHERE id = '$id' ";

    mysqli_query($db_connect,$update_query); 
    $_SESSION['Success massage'] = "$old_full_name edit succesfully TO $full_name";
 
    header("location: user_list.php");

?>