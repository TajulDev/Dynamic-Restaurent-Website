<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header-starlight.php';
require_once 'includes/nav-starlight.php';
$email_address_from_login_page = $_SESSION['email_address_from_login_page'];
$all_services_query = "SELECT * FROM services";
$all_services_from_db = mysqli_query($db_connect, $all_services_query);


?>
<!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <span class="breadcrumb-item active">Dashboard</span>
        <a class="breadcrumb-item" href="profile.php">Profile</a>
      </nav>

    <div class="sl-pagebody">
     <div class="row">
  <div class="col-12 col-md-6"> 
  <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Service List
    </div>
           <div class="card-body">
            <table class="table table-success table-striped table-bordered">
              <thead>
                <tr>
                 <th>Service icon</th>
                 <th>Service Title</th>
                 <th>Service description</th>
                 <th>Service Status</th>
               
                
                </tr>
              </thead>
              <tbody>
                  <?php
                    foreach($all_services_from_db as $service):
                  ?>
                 <tr>
                    <td>
                        <i class="<?=$service['service_icon']?>"></i>
                    </td>
                    <td><?=$service['service_title']?></td>
                    <td><?=$service['service_description']?></td>
                  
                                                                         
                    <td>
                      <!-- active/deactive start -->
                      <?php if($service['status'] == 'active'): ?>
                         <!-- <span class="badge bg-primary">
                           <?=$service['status']?>
                         </span> -->
                         <a href="change_service_status.php?id=<?=$service['id']?>&what_to_do=deactive" class="btn btn-sm btn-warning">make as Deactive</a>
                         <?php else: ?>
                          <!-- <span class="badge bg-danger">
                           <?=$service['status']?>
                         </span> -->
                         <a href="change_service_status.php?id=<?=$service['id']?>&what_to_do=active" class="btn btn-sm btn-info">make as Active</a>

                         <?php endif; ?>
                          <!-- active/deactive end -->
                    </td>
                    
                </tr>
               <?php  endforeach; ?>
               
               </tbody>
            </table>
       </div>
      </div>
  </div>
  <div class="col-12 col-md-6">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Add services
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
          
          <form action="service_post.php" method="POST">                    
             <div class="form-group">
                     <label for="exampleInputPassword1">Service Icon</label>
                     <input type="text" class="form-control" name="service_icon">
                     <a href="https://fontawesome.com/v4/icons/" target="_blank">Fonts list</a>
             </div>                 
             <div class="form-group">
                     <label for="exampleInputPassword1">Service Title</label>
                     <input type="text" class="form-control" name="service_title">
             </div>                 
             <div class="form-group">
                     <label for="exampleInputPassword1">Service Description</label>
                   <textarea name="service_description" class="form-control" rows="4"></textarea>
             </div>                 
             <button type="submit" class="btn btn-success">Add Now</button>
        </form>


          
         
       </div>
      </div>
    </div>
</div></div>
  </div>

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->





  <?php
require_once 'includes/footer-starlight.php';
?>


 
  
       
  


