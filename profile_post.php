<?php
session_start();
require_once 'includes/db.php';
$email_address = $_SESSION['email_address_from_login_page'];
$encrypt_password = md5($_POST['old_password']);
$check_query = "SELECT COUNT(*) AS total FROM users WHERE email_address = '$email_address' AND password = '$encrypt_password'";
if(mysqli_fetch_assoc(mysqli_query($db_connect, $check_query))['total'] == 1){
   
    if($_POST['new_password'] == $_POST['confirm_password']){
        $encrypt_new_password = md5($_POST['new_password']);
        $password_update_query = "UPDATE users SET password = '$encrypt_new_password' WHERE email_address = '$email_address'";
        mysqli_query($db_connect, $password_update_query);
        header('location: profile.php');
    }
    else {
        echo "New password did not matched with Confirm password";
    }
}
else{
    echo "SORR, ITS wrong";
}

?>








