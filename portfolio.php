<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$all_portfolio_query = "SELECT * FROM portfolios";
$all_portfolio_from_db = mysqli_query($db_connect, $all_portfolio_query);

?>

  <div class="col-12 col-md-8">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Add Portfolio 
    </div>
     <div class="card-body">
         <?php if(isset($_SESSION['status'])):?>
         <div class="alert alert-success">
            <?=$_SESSION['status']?>
            <?php
            unset($_SESSION['status']);
            ?>
         </div>
          <?php endif; ?>
         <form action="portfolio_post.php" method="POST" enctype="multipart/form-data"> 
             <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio Title</label>
                     <input type="text" class="form-control" name="portfolio_title">
             </div>
            
             <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio Details</label>
                     <textarea name="portfolio_details" class="form-control" rows="4"></textarea>
             </div>             

              <div class="form-group">
                     <label for="exampleInputPassword1">Portfolio_Feature_Photo</label>
                     <input type="file" class="form-control" name="portfolio_feature_photo">
             </div> 

             <button type="submit" class="btn btn-success">Add Now</button>
        </form>
       </div>
      </div>
    </div>
</div>

    </div>
  </div>



 
  
       
  


