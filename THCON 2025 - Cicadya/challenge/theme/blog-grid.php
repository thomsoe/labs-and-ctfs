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
							<li class="nav-item active"><a class="nav-link" href="blog-grid.php">Blog</a></li>
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
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
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
          <h1>Blogs</h1>
          <p>Here is a collection of our marvellous papers about cryptography.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="post">
					<div class="post-thumb">
						<a href="blog-grid.php#">
							<img class="img-fluid" src="images/blog/blog-post-1.jpg" alt="">
						</a>
					</div>
					<h3 class="post-title"><a href="blog-grid.php#">How We Created RSA</a></h3>
					<div class="post-meta">
					    <ul>
						<li>
						    <i class="ion-calendar"></i> 20, MAR 2020
						</li>
						<li>
						    <i class="ion-android-people"></i> POSTED BY ADMIN
						</li>
						<li>
						    <a href="blog-grid.php"><i class="ion-pricetags"></i> CRYPTOGRAPHY</a>,<a href="blog-grid.php"> SECURITY</a>
						</li>
					    </ul>
					</div>
					<div class="post-content">
					    <p>RSA revolutionized digital security, but what if we told you it was just the beginning? Discover how our pioneering work in asymmetric encryption laid the foundation for secure communications and continues to evolve for the future.</p>
					    <a href="blog-grid.php#" class="btn btn-main">Read More</a>
					</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="post">
					    <div class="post-thumb">
						<a href="blog-grid.php#">
						    <img class="img-fluid" src="images/blog/blog-post-2.jpg" alt="">
						</a>
					    </div>
					    <h3 class="post-title"><a href="blog-grid.php#">Beyond AES: The Future of Encryption</a></h3>
					    <div class="post-meta">
						<ul>
						    <li>
							<i class="ion-calendar"></i> 20, MAR 2020
						    </li>
						    <li>
							<i class="ion-android-people"></i> POSTED BY THOMAS
						    </li>
						    <li>
							<a href="blog-grid.php"><i class="ion-pricetags"></i> CRYPTOGRAPHY</a>, <a href="blog-grid.php">INNOVATION</a>
						    </li>
						</ul>
					    </div>
					    <div class="post-content">
						<p>AES has safeguarded global data for decades, but the future demands more. Explore our cutting-edge advancements in encryption algorithms that push security beyond today's limits while maintaining efficiency and scalability.</p>
						<a href="blog-grid.php#" class="btn btn-main">Read More</a>
					    </div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="post">
					    <div class="post-thumb">
						<a href="blog-grid.php#">
						    <img class="img-fluid" src="images/blog/blog-post-3.jpg" alt="">
						</a>
					    </div>
					    <h3 class="post-title"><a href="blog-grid.php#">Reinventing TLS for Tomorrow</a></h3>
					    <div class="post-meta">
						<ul>
						    <li>
							<i class="ion-calendar"></i> 20, MAR 2020
						    </li>
						    <li>
							<i class="ion-android-people"></i> POSTED BY ADMIN
						    </li>
						    <li>
							<a href="blog-grid.php"><i class="ion-pricetags"></i> CRYPTOGRAPHY</a>, <a href="blog-grid.php">INNOVATION</a>
						    </li>
						</ul>
					    </div>
					    <div class="post-content">
						<p>From its inception to the latest cryptographic protocols, TLS has shaped the way we encrypt the web. Learn how our breakthroughs in secure handshake mechanisms and post-quantum cryptography are fortifying online privacy.</p>
						<a href="blog-grid.php#" class="btn btn-main">Read More</a>
					    </div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="post">
					    <div class="post-thumb">
						<a href="blog-grid.php#">
						    <img class="img-fluid" src="images/blog/blog-post-4.jpg" alt="">
						</a>
					    </div>
					    <h3 class="post-title"><a href="blog-grid.php#">The Future of Unbreakable Encryption</a></h3>
					    <div class="post-meta">
						<ul>
						    <li>
							<i class="ion-calendar"></i> 20, MAR 2020
						    </li>
						    <li>
							<i class="ion-android-people"></i> POSTED BY ADMIN
						    </li>
						    <li>
							<a href="blog-grid.php"><i class="ion-pricetags"></i> CRYPTOGRAPHY</a>,<a href="blog-grid.php"> SECURITY</a>
						    </li>
						</ul>
					    </div>
					    <div class="post-content">
						<p>Quantum computing threatens traditional cryptographic systems. Our team is at the forefront of designing encryption resistant to quantum attacks—ensuring a secure digital future for generations to come.</p>
						<a href="blog-grid.php#" class="btn btn-main">Read More</a>
					    </div>
					</div>
			</div>
			<div class="col-md-6">
				<div class="post">
					<div class="post-media post-media-audio">
						<iframe height="390"
							src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1225621807&amp;color=ff5500&amp;auto_play=false&amp;show_artwork=true"
							class="DRAGDIS_iframe"></iframe>
					</div>
					<h3 class="post-title"><a href="blog-grid.php#">Our Anthem</a></h3>
					<div class="post-meta">
						<ul>
							<li>
								<i class="ion-calendar"></i> 20, MAR 2020
							</li>
							<li>
								<i class="ion-android-people"></i> POSTED BY ADMIN
							</li>
							<li>
								<a href="blog-grid.php"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-grid.php"> TRAVEL</a>, <a href="blog-grid.php">FASHION</a>
							</li>
						</ul>
					</div>
					<div class="post-content">
						<p>Phom je phuying kon neung, kao tam hai jai pom wai, mai ru arai bpen pro arai, tammai bpen ngan, go koh kae piang dai mong, fan teung ter tuk wan tuk wan dai reu bplao, pro wa ter nan ma tam hai jai chan wai, ter ma tam hai jai kong chan, man teung kan roon raeng yang ni, kohrong hai ter chuay yud, koh hai ter chuay yud kwam narak ti, pro wa ter nan ma tam hai jai chan wai, ter ma tam hai jai kong chan, man teung kan roon raeng yang ni, kohrong hai ter chuay yud.</p>
						<a href="blog-grid.php#" class="btn btn-main">Read More</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="post">
					<div class="post-media post-media-audio">
						<iframe width="100%" height="400" src="https://www.youtube.com/embed/_GSDUXPpSgc?si=4AZk070bEplw8ZcQ" frameborder="0"
							allowfullscreen></iframe>
					</div>
					<h3 class="post-title"><a href="blog-grid.php#">Cloud Post-Quantum Cryptography</a></h3>
					<div class="post-meta">
						<ul>
							<li>
								<i class="ion-calendar"></i> 20, MAR 2020
							</li>
							<li>
								<i class="ion-android-people"></i> POSTED BY ADMIN
							</li>
							<li>
								<a href="blog-grid.php"><i class="ion-pricetags"></i> LIFESTYLE</a>,<a href="blog-grid.php"> TRAVEL</a>, <a href="blog-grid.php">FASHION</a>
							</li>
						</ul>
					</div>
					<div class="post-content">
						<p>This session introduces post-quantum cryptography and how you can use it today to secure TLS communication. Learn about recent updates on standards and existing deployments, including the AWS post-quantum TLS implementation (pq-s2n). A description of the hybrid key agreement method shows how you can combine a new post-quantum key encapsulation method with a classical key exchange to secure network traffic today.</p>
						<a href="blog-grid.php#" class="btn btn-main">Read More</a>
					</div>
				</div>
			</div>
		</div>


		<nav aria-label="Page navigation example">
			<ul class="pagination post-pagination justify-content-center">
				<li class="page-item"><a class="page-link" href="blog-grid.php">Prev</a></li>
				<li class="page-item"><a class="page-link" href="blog-grid.php">1</a></li>
				<li class="page-item"><a class="page-link" href="blog-grid.php">2</a></li>
				<li class="page-item"><a class="page-link" href="blog-grid.php">3</a></li>
				<li class="page-item"><a class="page-link" href="blog-grid.php">Next</a></li>
			</ul>
		</nav>
	</div>
</div>


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
