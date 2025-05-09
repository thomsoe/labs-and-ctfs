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
  <meta name="description" content="Cryptographic Algorithm Creator">
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
							<li class="nav-item active">
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
							<!-- <a class="nav-li" href "Y2UgYm9uIHZpZXV4IGRqIGtoYWxlZA.php">Authentication</a>-->
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

<!-- Slider Start -->
<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="animated fadeInUp">Pioneering Cryptographic <br> Technology &#38; Security </h1>
					<p class="animated fadeInUp">We collaborate closely with our clients to develop cutting-edge cryptographic solutions<br> that protect their sensitive information and meet their unique security needs</p>
					<a href="./about.php" class="btn btn-main animated fadeInUp" >Discover Cicadya </a>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Wrapper Start -->
<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="block">
					<div class="section-title">
						<h2>About Us</h2>
						<p>Since the dawn of digital security, we have been the architects of the world's most powerful encryption standards, shaping the foundation of modern cryptography.</p>
					</div>
					<p>For decades, our groundbreaking research and innovative algorithms have redefined the landscape of cybersecurity. From pioneering asymmetric encryption to designing the ciphers that protect global communications, our expertise has set the gold standard for data protection. With an unwavering commitment to excellence, we continue to push the boundaries of cryptographic science, anticipating tomorrow’s threats and delivering state-of-the-art encryption solutions. Where others follow, we lead—transforming the future of digital security, one algorithm at a time.</p>
				</div>
			</div><!-- .col-md-7 close -->
			<div class="col-md-5">
				<div class="block">
					<img src="images/wrapper-img.png" alt="Img">
				</div>
			</div><!-- .col-md-5 close -->
		</div>
	</div>
</section>

<section class="feature bg-2">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6">
	<h2 class="section-subtitle">WE BELIEVE IN GREAT IDEAS</h2>
	<p>Innovation drives progress, and at the heart of every breakthrough lies a bold idea. We are committed to reimagining encryption, designing algorithms that not only secure data but redefine the very fabric of digital trust.</p>
	<p>From conceptualizing next-generation cryptographic protocols to engineering solutions that withstand the test of time, we blend mathematical ingenuity with technological excellence. Our mission is to transform complex security challenges into seamless, unbreakable defenses.</p>
	<p>Great ideas fuel our journey. We don’t just adapt to the evolving digital landscape, we shape it, ensuring that privacy and security remain uncompromised in an ever-changing world.</p>
	<a href="portfolio.php" class="btn btn-view-works">View Works</a>
      </div>
    </div>
  </div>
</section>

<!-- Service Start -->
<section class="service">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="section-title">
          <h2>Our Services</h2>
          <p>We specialize in cutting-edge cryptographic solutions, pioneering the future of secure communication. <br> Our expertise spans algorithm design, security analysis, and innovative encryption technologies.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="icon ion-coffee"></i>
          <h4>Algorithm Design</h4>
      		<p>Developing groundbreaking encryption standards to secure the future of digital communications.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-compass"></i>
          <h4>Encryption & Protection</h4>
      		<p>Implementing robust encryption techniques to safeguard sensitive information from cyber threats.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-image"></i>
        	<h4>Cybersecurity Consulting</h4>
      		<p>Providing expert analysis and tailored security solutions for organizations seeking enhanced data protection.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-bug"></i>
          <h4>Security Audits</h4>
      		<p>Assessing encryption protocols and identifying vulnerabilities to ensure airtight security.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-headphone"></i>
          <h4>Cloud Encryption</h4>
   	   <p>Securing cloud-based data storage and transactions with state-of-the-art cryptographic methods.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-leaf"></i>
          <h4>Post-Quantum</h4>
      		<p>Developing next-generation encryption resistant to quantum computing threats.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-planet"></i>
          <h4>Secure Communication</h4>
      		<p>Designing encrypted messaging and networking solutions for maximum privacy and confidentiality.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6">
        <div class="service-item">
          <i class="ion-earth"></i>
          <h4>Blockchain Security</h4>
      		<p>Enhancing blockchain protocols with advanced cryptographic techniques to ensure trust and integrity.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Call to action Start -->

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

<!-- Content Start -->
<section class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h2>Fun Facts About Us</h2>
          <p>They’re the names of the best cryptographic developer company in the world, but behind each famous branding face lies a fascinating brand story.<br> Here’s a round-up of the snippets you might not be so familiar with… </p>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="block">
          <ul class="counter-box clearfix">
            <li>
              <div class="counter-item">
                <i class="ion-ios-chatboxes-outline"></i>
                <h4 class="count" data-count="99">0</h4>
                <span>Cups Of Coffee</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-glasses-outline"></i>
                <h4 class="count" data-count="45">0</h4>
                <span>Article Written</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-compose-outline"></i>
                <h4 class="count" data-count="125">0</h4>
                <span>Projects Completed</span>
              </div>
            </li>
            <li>
              <div class="counter-item">
                <i class="ion-ios-timer-outline"></i>
                <h4 class="count" data-count="200">0</h4>
                <span>Commands Fulfilled</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-5 col-md-offset-1">
        <div class="testimonial-carousel text-center">
          <div class="testimonial-slider owl-carousel">
            <div>
              <i class="ion-quote"></i>
              <p>"I don't know what to say, I arrived here yesterday. Why am I quoted ? Anyway, I'm just an intern so I guess it won't be displayed in the first place."</p>
              <div class="user">
                <img src="images/teams/team-2.jpg" alt="Pepole">
                <p><span>Rose Ray</span> Intern</p>
              </div>
            </div>
	    <div>
              <i class="ion-quote"></i>
              <p>"I love my job, I love the company, I love all the employees ! Praise the CEO, he is the best ! For you information, I'm the one who makes the administrative work here and I receive the emails."</p>
              <div class="user">
                <img src="images/teams/team-4.jpg" alt="Pepole">
                <p><span>Leila Stuart</span> Secretary</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"This Company makes a lot of money, I can assure that. Oh wait, maybe I shouldn't say that, I hope it won't be written somewhere."</p>
              <div class="user">
                <img src="images/teams/team-1.jpg" alt="Pepole">
                <p><span>Paul Gomez</span> Accountant</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"The CEO is maybe one the dumbest guy in the world, I really can't stand him. He likes making dubious comparisons too much."</p>
              <div class="user">
                <img src="images/teams/team-5.jpg" alt="Pepole">
                <p><span>Nathalie Cavaro</span> Communication Manager</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"I'm the one that does all the work here, IT specialist huh ? What can I say...ah yes ! The CEO is a really big fan of SHA256, he likes to implement this algorithm anywhere."</p>
              <div class="user">
                <img src="images/teams/team-3.jpg" alt="Pepole">
                <p><span>Thomas Rolland</span> IT Specialist</p>
              </div>
            </div>
            <div>
              <i class="ion-quote"></i>
              <p>"I'm the CEO and I'm the one that has the access everywhere, do you get me ? I always use a bit of magic if needed."</p>
              <div class="user">
                <img src="images/teams/ceo.jpg" alt="Pepole">
                <p><span>Don Aldtrump</span> CEO - Cicadya</p>
              </div>
            </div>
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
   
