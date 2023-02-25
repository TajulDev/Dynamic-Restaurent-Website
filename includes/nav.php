<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Lion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">


          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="registration.php">Registration</a>

        <?php
          if(!isset($_SESSION['login status'])):

        ?>

          <a class="nav-link btn btn-success" href="login.php">Login</a>

        <?php
          endif;
        ?>

          <a class="nav-link" href="user_list.php">User List</a>

        <?php
          if(isset($_SESSION['login status'])):

        ?>

          <a class="nav-link" href="brand.php">Brand</a>
          <a class="nav-link" href="testimonial.php">Testimonial</a>
          <a class="nav-link" href="portfolio.php">Portfolio</a>
          <a class="nav-link" href="factarea.php">Fact-area</a>
          <a class="nav-link" href="service.php">Service</a>
          <a class="nav-link" href="Text-setting.php">Text-Setting</a>
          <a class="nav-link" href="pic_setting.php">Picture-Setting</a>
          <a class="nav-link" href="profile.php">Profile</a>
          <a class="nav-link btn btn-danger" href="log_out.php">Log Out</a>

        <?php
          endif;
        ?>

      </ul>
    </div>
  </div>
</nav>
