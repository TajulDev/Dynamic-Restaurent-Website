<?php
session_start();
include_once 'includes/db.php';
include_once 'includes/header.php';
include_once 'includes/nav.php';


    $select_query = "SELECT id,full_name,Email_address,gender FROM users";
    $data_from_db = mysqli_query($db_connect, $select_query);
   
   ?>
<div class="row mt-3">
    <div class="col-10 m-auto">
        <div class="card mb-3">
  <div class="card-header bg-info text-center">
      <h2>User List</h2>
    </div>
  <div class="card-body">
    <div class="alert alert-danger text-center">
      <a class="btn btn-danger" href="delete_all_user.php">Delete ALL</a>

    </div>
      <div class="alert alert-success">

          Total users: <?=$data_from_db->num_rows?>

      </div>
      <?php 
      if (isset($_SESSION['status'])){
        ?>
        <div class="alert alert-danger text-center">
          <?php
               echo $_SESSION['status'];
               unset($_SESSION['status']);
              
          ?>

        </div>

        <?php
         } 
      ?>
      <?php 
      if (isset($_SESSION['Success massage'])){
        ?>
        <div class="alert alert-success text-center">
          <?php
               echo $_SESSION['Success massage'];
               unset($_SESSION['Success massage']);
              
          ?>

        </div>

        <?php
         } 
      ?>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      
      <th scope="col" class="table-dark">Serial No</th>
      <th scope="col" class="table-dark">ID</th>
      <th scope="col" class="table-dark">Full name</th>
      <th scope="col" class="table-dark">Email Address</th>
      <th scope="col" class="table-dark">Gender</th>
      <th scope="col" class="table-dark">Aktion</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    $serial_no = 100;
     foreach($data_from_db as $user_value):
         
        
    
    ?>
    <tr>
      <td class="table-primary"><?=$serial_no++?></td>
      <td class="table-secondary"><?=$user_value['id']?></td>
      <td class="table-info"><?=strtoupper($user_value['full_name'])?></td>
      <td class="table-danger"><?=$user_value['Email_address']?></td>
      <td class="table-warning"><?=strtoupper($user_value['gender'])?></td>
      <td>
        <a class="btn btn-outline-info" href="edit_user.php?id=<?=$user_value['id']?>">Edit</a>
        <a class="btn btn-outline-danger" href="delete_user.php?id=<?=$user_value['id']?>">Delete</a>
      </td>

      </tr>
    <?php 
    endforeach;
    ?>
    <?php 
      if($data_from_db->num_rows == 0): ?>
    
    <tr>
      <td colspan="50" class="text-center text-danger">
        No data availabl
      </td>
    </tr>
    <?php endif; ?>
    </tbody>
</table>
   



</div>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>



  




     