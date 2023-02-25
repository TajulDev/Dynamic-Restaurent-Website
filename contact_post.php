<?php
session_start();
require_once 'includes/db.php';

$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_message = $_POST['guest_message'];

$insert_query = "INSERT INTO contacts (guest_name,guest_email,guest_message) VALUES ('$guest_name', '$guest_email', '$guest_message')";
mysqli_query($db_connect,$insert_query);
$_SESSION['status'] = "Message Sent successfully";
header("location: index.php#reservation");

?>