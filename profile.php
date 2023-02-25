<?php
session_start();

require_once 'includes/db.php';
$page_name = 'Profile';
require_once 'includes/header-starlight.php';
require_once 'includes/nav-starlight.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$select_profile_pic_query = "SELECT profile_img FROM users WHERE email_address = '$email_address_from_login_page'";
mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'];

?>
<!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
      <span class="breadcrumb-item active">Profile</span>
    </nav>

    <div class="sl-pagebody">
      
<div class="row">
  <div class="col-12 col-md-6"> 
  <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     change profile image
    </div>
           <div class="card-body">
             <div class="text-center">
               <img class="border" width="100" src="img/profile_img/<?=mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img']?>" alt="">
               <?php
               if(mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img'] != "defoultPP.png"):
               ?>
               <br>
               <a href="delete_profile_picture.php?picture_name=<?=mysqli_fetch_assoc(mysqli_query($db_connect, $select_profile_pic_query))['profile_img']?> " class="btn btn-danger btn-sm">Delete Profile Picture</a>
               <?php
               endif;
               ?>
             </div>
               <form action="profile_image_post.php" method="POST" enctype="multipart/form-data"> 
                   
                   <div class="form-group">
                     <label for="exampleInputPassword1">New Profile image</label>
                     <input type="file" class="form-control" name="new_profile_image">
                   </div>
                   <br>
                  <button type="submit" class="btn btn-success">Change Now</button>
        </form>
       </div>
      </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     change Password
    </div>
           <div class="card-body">
               <form action="profile_post.php" method="POST"> 
                   
                   <div class="form-group">
                     <label for="exampleInputPassword1">Old Password</label>
                     <input type="password" class="form-control" name="old_password">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">New Password</label>
                     <input type="password" class="form-control" name="new_password">
                   </div>
                   <div class="form-group">
                     <label for="exampleInputPassword1">Confirm Password</label>
                     <input type="password" class="form-control" name="confirm_password">
                   </div>
                   
                   <button type="submit" class="btn btn-success">Change Your Password Now</button>
        </form>
       </div>
      </div>
    </div>
</div>
</div>
</div>

    </div><!-- sl-pagebody -->
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

   <?php
require_once 'includes/footer-starlight.php';
?>










 
  
       
  

