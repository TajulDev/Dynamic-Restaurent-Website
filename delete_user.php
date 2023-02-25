<?php
session_start();
include_once 'includes/db.php';

$id = $_GET['id'];
$delete_user = "DELETE FROM users WHERE id= $id";
$delete = mysqli_query($db_connect, $delete_user);
if ($delete) {
    $_SESSION['status'] = 'DELETED SUCCESSFULLY';
   header('location:user_list.php');
}
else{
    echo "NOT ok";
};

echo $id;

?>
