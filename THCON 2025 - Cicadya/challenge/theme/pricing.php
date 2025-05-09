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
							<li class="nav-item @@contact"><a class="nav-link" href="contact.php">Contact</a></li>
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
          <h1>Project Price</h1>
          <p>Here is the different packs we propose for bulding your projects. </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="pricing-table section bg-gray">
	<div class="container">
		<div class="row">
			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
				<div class="pricing-item text-center">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Basic</h3>
						<strong class="value">$99</strong>
						<p>Perfect for single freelancers who work by themselves</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="ion-ios-circle-outline"></i> Unlimited agents</li>
						<li><i class="ion-ios-circle-outline"></i> 10 PSD Design</li>
						<li><i class="ion-ios-circle-outline"></i> HTML5 Markup</li>
						<li><i class="ion-ios-circle-outline"></i> Basic SEO</li>
						<li><i class="ion-ios-circle-outline"></i> Email Marketing</li>
						<li><i class="ion-ios-circle-outline"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- Contact Us button -->
					<a class="btn btn-small" href="contact.php">Contact Us</a>
					<!-- /Contact Us button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
				<div class="pricing-item text-center">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Premium</h3>
						<strong class="value">$199</strong>
						<p>Suitable for small businesses with up to 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="ion-ios-circle-outline"></i> Unlimited agents</li>
						<li><i class="ion-ios-circle-outline"></i> 20 PSD Design</li>
						<li><i class="ion-ios-circle-outline"></i> HTML5/CSS3 Markup</li>
						<li><i class="ion-ios-circle-outline"></i> Advance SEO</li>
						<li><i class="ion-ios-circle-outline"></i> Email Marketing</li>
						<li><i class="ion-ios-circle-outline"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- Contact Us button -->
					<a class="btn btn-small" href="contact.php">Contact Us</a>
					<!-- /Contact Us button -->

				</div>
			</div>
			<!-- end single pricing table -->

			<!-- single pricing table -->
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
				<div class="pricing-item text-center">

					<!-- plan name & value -->
					<div class="price-title">
						<h3>Platinum</h3>
						<strong class="value">$29999</strong>
						<p>Great for large businesses with more than 5 employees</p>
					</div>
					<!-- /plan name & value -->

					<!-- plan description -->
					<ul>
						<li><i class="ion-ios-circle-outline"></i> Unlimited agents</li>
						<li><i class="ion-ios-circle-outline"></i> Infinite PSD Design</li>
						<li><i class="ion-ios-circle-outline"></i> Sheeeeeeeeesh</li>
						<li><i class="ion-ios-circle-outline"></i> Pro SEO</li>
						<li><i class="ion-ios-circle-outline"></i> So much money</li>
						<li><i class="ion-ios-circle-outline"></i> 24/7 Tech Support</li>
					</ul>
					<!-- /plan description -->

					<!-- Contact Us button -->
					<a class="btn btn-small" href="contact.php">Contact Us</a>
					<!-- /Contact Us button -->

				</div>
			</div>
			<!-- end single pricing table -->


		</div> <!-- End row -->
	</div> <!-- End container -->
</section> <!-- End section -->
<section class="faq section-sm ">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h2>Here is some FAQ</h2>
				<p>for more please visit our <a href="contact.php">Contact Page</a></p>
			</div>
		</div>
		<div class="row">
			    <div class="col-md-6 mt-4">
				<h4>Do I need to pay upfront?</h4>
				<p>No, we offer flexible payment options. You can choose to pay upfront for a discount or opt for a monthly subscription based on your needs.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>Are volume discounts available?</h4>
				<p>Yes, we provide discounts for bulk purchases or enterprise-level agreements. Please contact our sales team for a customized quote.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>What level of support is included in my plan?</h4>
				<p>All plans include basic email support. Premium plans come with priority support, live chat, and dedicated account management.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>Do I need to pay more for chat support?</h4>
				<p>Chat support is included in our premium plans. For basic plans, you can add it as an extra service for a small fee.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>What does the Basic SEO Pack include?</h4>
				<p>Our Basic SEO Pack includes keyword optimization, metadata improvements, and a performance audit to enhance your website’s visibility.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>How do refunds work?</h4>
				<p>We offer a 14-day money-back guarantee on all plans. If you’re not satisfied, you can request a full refund within this period.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>Do you support non-profits?</h4>
				<p>Yes, we offer special pricing and additional support for registered non-profit organizations. Contact us to learn more.</p>
			    </div>
			    <div class="col-md-6 mt-4">
				<h4>Can I get a customized solution?</h4>
				<p>Absolutely! We specialize in tailor-made algorithmic solutions to meet your specific business needs. Get in touch to discuss your requirements.</p>
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
