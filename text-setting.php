<?php
session_start();

require_once 'includes/db.php';
require_once 'includes/header.php';
require_once 'includes/nav.php';
$all_text_settings_query = "SELECT * FROM text_settings";
$all_text_settings_from_db = mysqli_query($db_connect, $all_text_settings_query);



?>
<div class="row">
   <div class="col-12 col-md-6 m-auto">
    <div class="card mb-3">
  <div class="card-header bg-info text-center ">
     Generel Text and Link Settings
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
         <form action="text-setting_post.php" method="POST">
            <?php foreach($all_text_settings_from_db as $text_settings): ?>
                        <div class="form-group">
                               <label for="exampleInputPassword1"><?=$text_settings['setting_name']?></label>
                               <input type="text" class="form-control" name="<?=$text_settings['setting_name']?>" value="<?=$text_settings['setting_value']?>">
                         </div> <br>
              <?php endforeach; ?>
             <button type="submit" class="btn btn-success">Update Now</button>
        </form>
       </div>
      </div>
    </div>
</div>

    </div>
  </div>


