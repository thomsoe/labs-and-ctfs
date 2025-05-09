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
							<li class="nav-item"><a class="nav-link" href="portfolio.php">Projects</a></li>
							<li class="nav-item active"><a class="nav-link" href="service.php">Service</a></li>
							<li class="nav-item @@service"><a class="nav-link" href="blog-grid.php">Blog</a></li>
							<li class="nav-item dropdown @@pages">
								<a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">Pages <span class="ion-ios-arrow-down"></span></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown05">
									<li><a class="dropdown-item @@about" href="about.php">About Us</a></li>
									<li><a class="dropdown-item @@comingSoon" href="coming-soon.php">Coming Soon</a></li>
									<li><a class="dropdown-item @@404" href="404.php">404 Page</a></li>
									<li><a class="dropdown-item @@faq" href="faq.php">FAQ</a></li>
									<li><a class="dropdown-item @@pricing" href="pricing.php">Pricing Table</a></li>
								</ul>
							</li>
							<li class="nav-item @@contact"><a class="nav-link" href="contact.php">Contact</a></li>
							<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>
        						<li class="nav-item"><a class="nav-link" href="profile.php">Profil</a></li>
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
          <h1>Services</h1>
          <p>We are the best in our field, here is what we can do for you!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-about section">
	<div class="container">
		<div class="row align-items-center text-center text-lg-left">
			<div class="col-lg-6">
				<h2>Develop the future algorithms</h2>
<p class="mt-30">Our mission is to create the most advanced cryptographic algorithms that will shape the future of data security. By leveraging cutting-edge techniques and innovative mathematical models, we aim to push the boundaries of what’s possible in encryption. We believe that tomorrow’s digital world requires an encryption solution that is not only secure but also scalable, adaptable, and capable of addressing new, unforeseen challenges. Our team is dedicated to pioneering cryptographic breakthroughs that protect sensitive information while ensuring privacy and trust in the digital age. We continuously refine our algorithms to stay ahead of emerging threats, enabling organizations to safeguard their data with confidence in an increasingly interconnected world.</p>

			</div>
			<div class="col-lg-6">
				<img class="img-fluid" src="images/company/company-group-pic.jpg">
			</div>
		</div>
	</div>
</section>

<section class="service-arrow">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-sm-6 bg-primary">
			    <div class="block">
				<i class="ion-erlenmeyer-flask text-white"></i>
				<h3 class="text-white mb-3">Cryptographic Algorithm Design</h3>
				<p>We specialize in designing cutting-edge encryption algorithms that provide secure, scalable solutions for protecting sensitive data across all industries.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6 bg-primary bg-primary-dark">
			    <div class="block">
				<i class="ion-leaf text-white"></i>
				<h3 class="text-white mb-3">Data Encryption Solutions</h3>
				<p>Our encryption solutions ensure that your data remains secure at all stages, from transmission to storage, safeguarding it from emerging threats.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-12 bg-primary bg-primary-darker">
			    <div class="block">
				<i class="ion-lightbulb text-white"></i>
				<h3 class="text-white mb-3">Advanced Security Protocols</h3>
				<p>We develop and implement advanced security protocols, integrating robust encryption with seamless user experiences, ensuring ultimate data protection.</p>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="service-list section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title text-center">
					<h2>What we do best</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Cryptographic Research</h3>
				<p>We conduct in-depth research to understand emerging threats and develop advanced cryptographic techniques that will secure data for the future.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Encryption Strategy</h3>
				<p>We craft tailored encryption strategies that meet the unique needs of each client, ensuring robust data protection across diverse platforms and applications.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Security Protocol Design</h3>
				<p>Our team designs advanced security protocols, integrating cryptography with cutting-edge technology to provide seamless, secure user experiences.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Encryption Engineering</h3>
				<p>Our encryption engineers implement secure, efficient, and scalable algorithms that ensure data protection while optimizing performance.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Threat Analysis & Testing</h3>
				<p>We perform testing and analysis to identify potential vulnerabilities in cryptographic systems, ensuring they withstand the most sophisticated attacks.</p>
			    </div>
			</div>
			<div class="col-lg-4 col-sm-6">
			    <div class="block">
				<h3 class="mb-3">Prototype Security Solutions</h3>
				<p>We prototype cryptographic solutions, testing and refining them to create high-performance encryption systems tailored to real-world needs.</p>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="call-to-action bg-1 section-sm overly">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h2 class="mb-3">We design delightful digital experiences.</h2>
					<p>Read more about what we do and our philosophy of design. Judge for yourself The work and results <br> we’ve
						achieved for other clients, and meet our highly experienced Team who just love to design.</p>
					<a class="btn btn-main btn-solid-border" href="contact.php">Tell Us Your Story</a>
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
						href="http://www.themefisher.com">Themefisher</a>. All rights reserved.
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

    </body>

    </html>
