<?php
session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "GET" && !isset($_SESSION["logged_in"])) {
	$_SESSION["logged_in"] = false;
}

if ($_SERVER["REQUEST_METHOD"] === "GET" && $_SESSION["logged_in"] === true) {
	header("Location: index.php");
	exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === "daldtrump@cicadya.com" || $email === "trolland@cicadya.com") {
	    if ($email === "daldtrump@cicadya.com" && hash('sha256',$password) == hash('sha256', 'Z664cnsb60')) { 
		$_SESSION["logged_in"] = true;
		header("Location: index.php");
		exit();
	    } else {
		$error = "Incorrect password";
	    }
    }
    else {
    	$error = "This email is not associated with a valid user.";
	}
}
?>

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
									<li><a class="dropdown-item @@404" href="404.php">404 Page</a></li>
									<li><a class="dropdown-item @@faq" href="faq.php">FAQ</a></li>
									<li><a class="dropdown-item @@pricing" href="pricing.php">Pricing Table</a></li>
								</ul>
							</li>
							<li class="nav-item @@contact"><a class="nav-link" href="contact.php">Contact</a></li>
							<li class="nav-item active"><a class="nav-link" href="Y2UgYm9uIHZpZXV4IGRqIGtoYWxlZA.php">Authentication</a></li>
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
          <h1>Administration Panel</h1>
          <p>Access to the secret part of this wonderful and magnificient website, wow, so exciting !</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-about section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8">
				<div class="card shadow p-4">
					<h2 class="text-center mb-3">Connexion</h2>
					<!-- Affichage des erreurs -->
					<?php if (!empty($error)) : ?>
						<div class="alert alert-danger text-center">
							<?= htmlspecialchars($error) ?>
						</div>
					<?php endif; ?>

					<form action="Y2UgYm9uIHZpZXV4IGRqIGtoYWxlZA.php" method="post">
						<div class="mb-3">
							<label for="email" class="form-label"><b>Email</b></label>
							<input type="email" id="email" name="email" class="form-control" required>
						</div>
						
						<div class="mb-3">
							<label for="password" class="form-label"><b>Mot de passe</b></label>
							<input type="password" id="password" name="password" class="form-control" required>
						</div>

						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Se connecter</button>
						</div>
					</form>

					<div class="mt-3 text-center">
						<label>
							<input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
						</label>
						<br>
						<a href="#">Mot de passe oublié ?</a>
					</div>
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
