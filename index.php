<?php
session_start();
require_once 'includes/db.php';
$all_services_query = "SELECT * FROM services WHERE status = 'active' ORDER BY id DESC ";
$all_services_from_db = mysqli_query($db_connect, $all_services_query);

$ban_text_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='ban_text'";
$ban_text_from_db = mysqli_query($db_connect, $ban_text_select_query);

$ban_details_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='ban_details'";
$ban_details_from_db = mysqli_query($db_connect, $ban_details_select_query);

$owner_fb_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='fb_link'";
$owner_fb_link_from_db = mysqli_query($db_connect, $owner_fb_link_select_query);

$owner_tw_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='tw_link'";
$owner_tw_link_from_db = mysqli_query($db_connect, $owner_tw_link_select_query);

$owner_instagram_link_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='instagram'";
$owner_instagram_link_from_db = mysqli_query($db_connect, $owner_instagram_link_select_query);

$owner_about_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='owner_about'";
$owner_about_from_db = mysqli_query($db_connect, $owner_about_select_query);

$owner_about_edu_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='about_edu'";
$owner_about_edu_from_db = mysqli_query($db_connect, $owner_about_edu_select_query);

$owner_address_query = "SELECT setting_value FROM text_settings WHERE setting_name='address'";
$owner_address_from_db = mysqli_query($db_connect, $owner_address_query);

$owner_phone_query = "SELECT setting_value FROM text_settings WHERE setting_name='phone'";
$owner_phone_from_db = mysqli_query($db_connect, $owner_phone_query);

$owner_emaile_query = "SELECT setting_value FROM text_settings WHERE setting_name='email'";
$owner_email_from_db = mysqli_query($db_connect, $owner_emaile_query);

$about_textarea_select_query = "SELECT setting_value FROM text_settings WHERE setting_name='about_textarea'";
$about_textarea_from_db = mysqli_query($db_connect, $about_textarea_select_query);

$all_portfolios_query = "SELECT * FROM portfolios";
$all_portfolios_from_db = mysqli_query($db_connect, $all_portfolios_query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <section id="navbar_hero" class="navber_hero_area">
            <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>                   
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <a href="#reservation" class="nav-item nav-link">Contact</a>

                </div>
             </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft"><?=mysqli_fetch_assoc($ban_text_from_db)['setting_value']?></h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2"><?=mysqli_fetch_assoc($ban_details_from_db)['setting_value']?>></p>
                            <a href="#reservation" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </section>
         <!-- Navbar & Hero End -->



        <!-- Service Start -->
        <section id="service" class="service_area">
            <div class="container-xxl py-5">
            <div class="container">
                <h5 class="section-title ff-secondary text-start text-primary fw-normal">Our services</h5>
                <div class="row g-4">
                     <?php foreach($all_services_from_db as $service): ?>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">

                       <div class="service-item rounded pt-3">

                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4 <?=$service['service_icon']?> "></i>
                                <h5><?=$service['service_title']?></h5>
                                <p><?=$service['service_description']?></p>
                            </div>

                        </div>

                    </div>
                  <?php endforeach; ?>

            </div>
        </div>
        </section>

        <!-- Service End -->


        <!-- About Start -->
        <section id="about" class="about_area">
          <div class="container-xxl py-5">
              <div class="container">
                  <div class="row g-5 align-items-center">
                      <div class="col-lg-6">
                          <div class="row g-3">
                              <div class="col-6 text-start">
                                  <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                              </div>
                              <div class="col-6 text-start">
                                  <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                              </div>
                              <div class="col-6 text-end">
                                  <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                              </div>
                              <div class="col-6 text-end">
                                  <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                          <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                          <p class="mb-4"><?=mysqli_fetch_assoc($about_textarea_from_db)['setting_value']?></p>
                          <div class="row g-4 mb-4">
                              <div class="col-sm-6">
                                  <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                      <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                      <div class="ps-4">
                                          <p class="mb-0">Years of</p>
                                          <h6 class="text-uppercase mb-0">Experience</h6>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-sm-6">
                                  <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                      <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                      <div class="ps-4">
                                          <p class="mb-0">Popular</p>
                                          <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                      </div>
                                  </div>
                              </div>
                         </div>
                    </div>
                </div>
         </section>

        <!-- About End -->


        <!-- Menu Start -->
        <section id="menu" class="menu_area">
          <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Burger</span>
                                                <span class="text-primary">$115</span>
                                            </h5>
                                            <small class="fst-italic">Ipsum ipsum clita erat amet dolor justo diam</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
         
        </section>
      <!-- Menu End -->
                        
        <!-- Reservation Start -->
        <section id="reservation" class="reservation_area">
          <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
              <div class="row g-0">
                  <div class="col-md-6">
                      <div class="video">
                          <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                              <span></span>
                          </button>
                      </div>
                  </div>
                  <div class="col-md-6 bg-dark d-flex align-items-center">
                      <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                          <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                          <h1 class="text-white mb-4">Book A Table Online</h1>                         
                          <form action="contact_post.php" method="POST">
                              <div class="row g-3">
                                  <div class="col-md-6">
                                      <div class="form-floating">
                                          <input type="text" class="form-control" name="guest_name" placeholder="Your Name">
                                          <label for="name">Your Name</label>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-floating">
                                          <input type="email" class="form-control" name="guest_email" placeholder="Your email">
                                          <label for="email">Your Email</label>
                                      </div>
                                  </div>                                  
                                  <div class="col-12">
                                      <div class="form-floating">
                                          <textarea class="form-control" name="guest_message" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                          <label for="message">Message</label>
                                      </div>
                                  </div>                                  
                                  <div class="col-12">
                                      <button class="btn btn-primary w-100 py-3" type="submit">BOOK NOW</button>                                     
                                  </div>
                              </div>
                          </form>                      
                      </div>
                  </div>
              </div>
          </div>

          <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content rounded-0">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!-- 16:9 aspect ratio -->
                          <div class="ratio ratio-16x9">
                              <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                  allow="autoplay"></iframe>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
      <!-- Reservation Start -->


        <!-- Team Start -->
        <section id="team" class="team_area">
          <div class="container-xxl pt-5 pb-3">
              <div class="container">
                  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                      <h1 class="mb-5">Our Master Chefs</h1>
                  </div>
                  <div class="row g-4">
                      <?php foreach($all_portfolios_from_db as $portfolios):?>
                      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                          <div class="team-item text-center rounded overflow-hidden">
                              <div class="rounded-circle overflow-hidden m-4">
                                  <img class="img-fluid" src="image/<?=$portfolios['portfolio_feature_photo']?>" alt="Cinque Terre">
                              </div>
                              <h5 class="mb-0"><?=$portfolios['portfolio_title']?></h5>
                              <small><?=$portfolios['portfolio_details']?></small>
                              <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                          </div>
                      </div>
                      <?php endforeach; ?>
                      
                  </div>
              </div>
          </div>
        </section>
      <!-- Team End -->


        <!-- Testimonial Start -->
        <section id="testimonial" class="testimonial_area">
          <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
              <div class="container">
                  <div class="text-center">
                      <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                      <h1 class="mb-5">Our Clients Say!!!</h1>
                  </div>
                  <!-- ********************** -->
                  <div class="owl-carousel testimonial-carousel">
                        <?php
                            $testimonial_select_query = "SELECT * FROM testimonials";
                            $testimonial_from_db = mysqli_query($db_connect, $testimonial_select_query);
                        ?>
                          <?php foreach($testimonial_from_db as $testimonial): ?>

                    <div class="testimonial-item bg-transparent border rounded p-4">
                          <?php for($start = 1; $start <= $testimonial['testimonial_stars']; $start++): ?>
                        <i class="fa fa-star-left fa-2x text-primary mb-3"></i>
                              <?php endfor; ?>
                        <p><?=$testimonial['testimonial_text']?></p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/profile_img/<?=$_SESSION['image_from_login_page']?>" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1"><?=$testimonial['testimonial_name']?></h5>
                                <small><?=$testimonial['testimonial_dasignation']?></small>
                            </div>
                        </div>
                    </div>
            <?php endforeach; ?>

                 </div>
                 
             <!-- ********************** -->
          </div>
        </section>
    <!-- Testimonial End -->


        <!-- Footer Start -->
        <section id="footer" class="footer_area">
          <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
              <div class="container py-5">
                  <div class="row g-5">
                      <div class="col-lg-4 col-md-6">
                          <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                          <a class="btn btn-link" href="#about">About Us</a>
                          <a class="btn btn-link" href="#reservation">Contact Us</a>
                          <a class="btn btn-link" href="#reservation">Reservation</a>
                          
                         </div>
                      <div class="col-lg-4 col-md-6">
                          <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                          <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?=mysqli_fetch_assoc($owner_address_from_db)['setting_value']?></p>
                          <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?=mysqli_fetch_assoc($owner_phone_from_db)['setting_value']?></p>
                          <p class="mb-2"><i class="fa fa-envelope me-3"></i><?=mysqli_fetch_assoc($owner_email_from_db)['setting_value']?></p>
                          <div class="d-flex pt-2">
                                <?php
                                    $tw_link = mysqli_fetch_assoc($owner_tw_link_from_db)['setting_value'];
                                    if($tw_link):
                                    ?>
                              <a class="btn btn-outline-light btn-social" target="_blank" href="<?=$tw_link?>"><i class="fab fa-twitter"></i></a>
                              <?php
                                    endif;
                                    ?>
                                  <?php
                                    $fb_link = mysqli_fetch_assoc($owner_fb_link_from_db)['setting_value'];
                                    if($fb_link):
                                    ?>
                              <a class="btn btn-outline-light btn-social" target="_blank" href="<?=$fb_link?>"><i class="fab fa-facebook-f"></i></a>
                                    <?php
                                    endif;
                                    ?>
                             
                          </div>
                      </div>
                      <div class="col-lg-4 col-md-6">
                          <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                          <h5 class="text-light fw-normal">Monday - Saturday</h5>
                          <p>09AM - 09PM</p>
                          <h5 class="text-light fw-normal">Sunday</h5>
                          <p>10AM - 08PM</p>
                      </div>
                  </div>
              </div>
              <div class="container">
                  <div class="copyright">
                      <div class="row">
                          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                              &copy; <a class="" href="about.php">Restoren</a>, All Right Reserved.

  							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
  							Designed By <a class="" href="https://www.facebook.com/kazi.emam.9">KAZI EMAM</a><br><br>
                              Distributed By <a class="" href="https://www.facebook.com/kazi.emam.9" target="_blank">KAZI EMAM</a>
                          </div>
                          <div class="col-md-6 text-center text-md-end">
                              <div class="footer-menu">
                                  <a href="index.php">Home</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
