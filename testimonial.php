<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$all_brands_query = "SELECT * FROM brands";
$all_brands_from_db = mysqli_query($db_connect, $all_brands_query);


?>
<div class="row">
  <div class="col-12 col-md-8">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Add Testimonial
    </div>
     <div class="card-body">
         <?php if(isset($_SESSION['testimonial_insurt_status'])):?>
         <div class="alert alert-success">
            <?=$_SESSION['testimonial_insurt_status']?>
            <?php
            unset($_SESSION['testimonial_insurt_status']);
            ?>
         </div>
          <?php endif; ?>
         <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                     <label for="exampleInputPassword1">Testimonial Image</label>
                     <input type="file" class="form-control-file" name="testimonial_Image">
             </div>

             <div class="form-group">
                     <label for="exampleInputPassword1">Testimonial Text</label>
                     <textarea name="testimonial_text" class="form-control"  rows="4"></textarea>
             </div>

             <div class="form-group">
                     <label for="exampleInputPassword1">Testimonial Name</label>
                     <input type="text" class="form-control" name="testimonial_name">
             </div>

             <div class="form-group">
                     <label for="exampleInputPassword1">Testimonial dasignation</label>
                     <input type="text" class="form-control" name="testimonial_dasignation">
             </div>

             <div class="form-group">
                     <label for="exampleInputPassword1">stars?</label>
                     <input type="number" class="form-control" name="testimonial_stars" max="5">
             </div>
             <button type="submit" class="btn btn-success">Insurt Testimonial</button>
        </form>
       </div>
      </div>
    </div>
</div>

    </div>
  </div>
