<?php
session_start();
require_once 'includes/db.php';

$testimonial_text = $_POST['testimonial_text'];
$testimonial_name = $_POST['testimonial_name'];
$testimonial_dasignation = $_POST['testimonial_dasignation'];
$testimonial_stars = $_POST['testimonial_stars'];


$insert_query = "INSERT INTO testimonials (testimonial_text, testimonial_name, testimonial_dasignation, testimonial_stars) VALUES ('$testimonial_text', '$testimonial_name', '$testimonial_dasignation', $testimonial_stars)";
mysqli_query($db_connect,$insert_query);
$last_inserted_id = mysqli_insert_id($db_connect);
$_FILES['testimonial_Image'];
 header("location: testimonial.php");

 ?>