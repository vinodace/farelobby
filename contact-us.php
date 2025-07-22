<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>

  <?php include("header.php"); ?>

<section class="fl-breadcrumb-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="breadcrumb-hding">Contact Us</h1>
        <ul class="breadcrumb-ullist">
          <li><a href="./">Home</a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>
</section> 

<section class="container section-py">
  <div class="row">
    <div class="col-md-12">
      <h5 class="wrap-title text-center">Get in Touch</h5>
      <h2 class="wrap-hding text-center pb-4">Contact Us</h2>
    </div>
    <div class="col-12 col-md-5 mb-3">
      <div class="box-shadow mb-3">
        <p class="wrap-title text-center fa-2x mb-0">
          <i class="fa-solid fa-phone-volume"></i>
        </p>
        <h3 class="wrap-hding text-center">Call Us</h3>
        <a href="tel:<?php echo $phone; ?>" class="wrap-subhding text-center d-block text-decoration-none text-dark"><?php echo $phone; ?></a>
      </div>
      <div class="box-shadow mb-3">
        <p class="wrap-title text-center fa-2x mb-0">
          <i class="fa-solid fa-envelope"></i>
        </p>
        <h3 class="wrap-hding text-center">Email Id</h3>
        <a href="mailto:<?php echo $email; ?>" class="wrap-subhding text-center d-block text-decoration-none text-dark"><?php echo $email; ?></a>
      </div>
      <div class="box-shadow">
        <p class="wrap-title text-center fa-2x mb-0">
          <i class="fa-solid fa-building"></i>
        </p>
        <h3 class="wrap-hding text-center">Address</h3>
        <h4 class="wrap-subhding text-center d-block text-decoration-none text-dark">3612 Windshire Dr Springfield, IL 62704, USA</h4>
      </div>
    </div>
    <div class="col-12 col-lg-7">
      <img src="images/contact-us.jpg" alt="" class="img-fluid about-img-radius mb-3 h-100 object-fit-cover">
    </div>
  </div>
</section>





  <?php include("footer.php"); ?>

 