<?php
session_start();
if(!isset($_SESSION['login status'])){
   header('location: login.php');
 }
$page_name = 'Dashboard';
require_once 'includes/header-starlight.php';
require_once 'includes/nav-starlight.php';
require_once 'includes/db.php';
$email_address_from_session = $_SESSION['email_address_from_login_page'];
$name_select_query = "SELECT full_name FROM users WHERE email_address = '$email_address_from_session' ";
?>

 <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item active">Dashboard</span>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
      </nav>

    <div class="sl-pagebody">
      <div class="card bd-0">
  <div class="card-header card-header-default bg-primary">
             Dashboard
  </div><!-- card-header -->
  <div class="card-body bd bd-t-0 rounded-bottom">
             <h1>Welcome to Lion </h1>
             <h2>Name: <?=mysqli_fetch_assoc(mysqli_query($db_connect, $name_select_query))['full_name']?></h2>
             <h2>Email: <?=$email_address_from_session?></h2>

  </div><!-- card-body -->
</div><!-- card -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php
require_once 'includes/footer-starlight.php';
?>
