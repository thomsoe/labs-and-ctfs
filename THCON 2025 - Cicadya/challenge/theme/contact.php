<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Cicadya | Cryptographic Algorithm Creator</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Agency Bootstrap Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Airspace Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />


  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="plugins/Ionicons/css/ionicons.min.css">
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Header Start -->
<header class="navigation">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg p-0">
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="Logo">
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
						<span class="ion-android-menu"></span>
					</button>

					<div class="collapse navbar-collapse ml-auto" id="navbarsExample09">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.php">About us</a>
							</li>
							<li class="nav-item @@service"><a class="nav-link" href="portfolio.php">Projects</a></li>
							<li class="nav-item @@service"><a class="nav-link" href="service.php">Service</a></li>
							<li class="nav-item @@service"><a class="nav-link" href="blog-grid.php">Blog</a></li>
							<li class="nav-item dropdown @@pages">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Pages <span class="ion-ios-arrow-down"></span></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown05">
									<li><a class="dropdown-item @@about" href="about.php">About Us</a></li>
									<li><a class="dropdown-item @@comingSoon" href="coming-soon.php">Coming Soon</a></li>
									<li><a class="dropdown-item @@faq" href="faq.php">FAQ</a></li>
									<li><a class="dropdown-item @@pricing" href="pricing.php">Pricing Table</a></li>
								</ul>
							</li>
							<li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
							<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>
        						<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
    							<?php endif; ?>							
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header><!-- header close -->

<section class="page-title bg-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block">
          <h1>Drop Us A Note</h1>
          <p>We won't read your message because it will end in Leila's mailbox but anyway.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact-form">
  <div class="container">
    <form class="row" id="contact-form">
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <div class="form-group">
            <input name="user_name" type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input name="user_email" type="text" class="form-control" placeholder="Email Address">
          </div>
          <div class="form-group">
            <input name="user_subject" type="text" class="form-control" placeholder="Subject">
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <div class="form-group-2">
            <textarea name="user_message" class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" onclick="last_authentication_url_part()">Send Message</button>	
        </div>
      </div>
      <div class="error" id="error">Sorry Msg does not sent</div>
      <div class="success" id="success">Message Sent</div>
    </form>
    <div class="contact-box row">
      <div class="col-md-6 col-sm-12">
        <div class="block">
          <h2>Stop By For A visit</h2>
          <ul class="address-block">
            <li>
              <i class="ion-ios-location-outline"></i>Cicadya Inc.<br>Innovation Hub, Roubaix, Brooklyn, Australia
            </li>
            <li>
              <i class="ion-ios-email-outline"></i>Email: <a href="#"><b>lstuart@cicadya.com</b>
            </li>
            <li>
              <i class="ion-ios-telephone-outline"></i>Phone: +00 0 00 00 00 00
            </li>
          </ul>
          <ul class="social-icons">
            <li>
              <a href="contact.php"><i class="ion-social-googleplus-outline"></i></a>
            </li>
            <li>
              <a href="contact.php"><i class="ion-social-linkedin-outline"></i></a>
            </li>
            <li>
              <a href="contact.php"><i class="ion-social-pinterest-outline"></i></a>
            </li>
            <li>
              <a href="contact.php"><i class="ion-social-dribbble-outline"></i></a>
            </li>
            <li>
              <a href="contact.php"><i class="ion-social-twitter-outline"></i></a>
            </li>
            <li>
              <a href="contact.php"><i class="ion-social-facebook-outline"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 mt-5 mt-md-0">
        <div class="block">
          <div class="google-map">
            <div class="map" id="map_canvas" data-latitude="51.5223477" data-longitude="-0.1622023"
              data-marker="images/marker.png"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- footer Start -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="footer-manu">
					<ul>
						<li><a href="about.php">About Us</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="service.php">How it works</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="pricing.php">Pricing</a></li>
					</ul>
				</div>
				<p class="copyright mb-0">Copyright 2020 &copy; Designed & Developed by <a
						href="contact.php">Themefisher</a>. All rights reserved.
					<br> Get More <a href="https://themefisher.com/free-bootstrap-templates/">Free Bootstrap
						Templates</a>
				</p>
			</div>
		</div>
	</div>
</footer>

<!--Scroll to top-->
<div id="scroll-to-top" class="scroll-to-top">
	<span class="icon ion-ios-arrow-up"></span>
</div>
    <!-- 
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- filter -->
    <script src="plugins/shuffle/shuffle.min.js"></script>
    <script src="plugins/SyoTimer/jquery.syotimer.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="plugins/google-map/map.js"></script>

    <script src="js/script.js"></script>
<script>
	  function last_authentication_url_part(){
		  confirm("Message sent! (no)");
		}
	</script>

    </body>

    </html>
