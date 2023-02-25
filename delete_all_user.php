<?php
session_start();
include_once 'includes/db.php';


$delete_all_user = "DELETE FROM users";
$delete = mysqli_query($db_connect, $delete_all_user);
if ($delete) {
    $_SESSION['status'] = 'DELETED ALL USERS SUCCESSFULLY';
   header('location:user_list.php');
}
else{
    echo "NOT ok";
};



?>
