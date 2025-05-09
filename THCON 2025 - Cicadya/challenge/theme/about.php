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
							<li class="nav-item active">
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
          <h1>About Our Company</h1>
          <p>Let us introduce ourselves to you and get more informations about the team !</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<div class="about-img">
					<img class="img-fluid" src="images/company/about.jpg">
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="pl-0 pl-lg-4">
					<h2>We strive to be the best and <br> make awesome work.</h2>
					<p>At our core, we’re a cutting-edge company revolutionizing the digital landscape by building powerful, future-proof encryption algorithms. We don’t just follow trends; we set them. Our team is dedicated to crafting innovative, game-changing solutions that not only protect data but also empower businesses to embrace a world of limitless possibilities. We create encryption technologies that are as dynamic as the challenges they aim to solve.</p>
					<p>As we continue to break new ground in the encryption space, we are building a legacy of trust, innovation, and excellence. Join us on this exciting journey, where we don’t just secure data – we future-proof it for a better tomorrow.</p>
					<a href="contact.php" class="btn btn-small">Download Company Profile</a>
				</div>
			</div>
		</div>
		<div class="row counter-box text-center mt-50">
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-flask-outline"></i>
					<h4 class="count" data-count="349">0</h4>
					<span>Completed Projects</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-flame-outline"></i>
					<h4 class="count" data-count="35000">0</h4>
					<span>Lines Of Code</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-pint-outline"></i>
					<h4 class="count" data-count="70">0</h4>
					<span>Satisfied Customer</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-wineglass-outline"></i>
					<h4 class="count" data-count="10">0</h4>
					<span>Awards Winner</span>
				</div>
			</div>

			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-chatboxes-outline"></i>
					<h4 class="count" data-count="2">0</h4>
					<span>Commands Fulfilled</span>
				</div>
			</div>
			<div class="col-lg-2 col-md-4 col-6 mt-4">
				<div class="counter-item">
					<i class="ion-ios-body-outline"></i>
					<h4 class="count" data-count="15">0</h4>
					<span>Secured Systems</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-feature bg-dark section dark-service">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>We are indepented Design & Development Agency</h2>
				</div>
			</div>
		</div>
		<div class="row">
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="ion-ios-color-filter-outline"></i>
				    <h4>Advanced Cryptography Solutions</h4>
				    <p>We develop state-of-the-art encryption systems designed to secure digital ecosystems and provide robust, scalable protection for sensitive data.</p>
				</div>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="ion-ios-unlocked-outline"></i>
				    <h4>Data Protection & Security Engineering</h4>
				    <p>Our team builds powerful security frameworks that protect your data, ensuring that sensitive information remains secure and private at all times.</p>
				</div>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="ion-ios-game-controller-b-outline"></i>
				    <h4>Blockchain Integration & Security</h4>
				    <p>We integrate blockchain technology with advanced encryption methods to ensure transparent, secure, and immutable transactions in digital networks.</p>
				</div>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="ion-ios-mic-outline"></i>
				    <h4>Cryptographic Algorithm Design</h4>
				    <p>We specialize in designing custom cryptographic algorithms that provide tailored encryption solutions for diverse business and security needs.</p>
				</div>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="ion-ios-lightbulb-outline"></i>
				    <h4>Digital Privacy & Identity Management</h4>
				    <p>We offer advanced privacy solutions that protect digital identities, ensuring secure and anonymous online experiences for users and businesses alike.</p>
				</div>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				<div class="service-item">
				    <i class="icon ion-coffee"></i>
				    <h4>Secure Data Architecture & Cloud Solutions</h4>
				    <p>Our cloud-based encryption services offer secure data storage and transfer, enabling organizations to safeguard their assets while benefiting from scalable infrastructure.</p>
				</div>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="testimonial section-sm">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
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
						      <p>"I'm the one that does all the work here, IT specialist huh ? What can I say...ah yes ! The CEO is a really big fan of SHA256, he likes to implement this algorithm anywhere."</p>
						      <div class="user">
							<img src="images/teams/team-3.jpg" alt="Pepole">
							<p><span>Thomas Rolland</span> IT Specialist</p>
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
						      <p>"I'm the CEO and I'm the one that has the access everywhere, do you get me ? I always use a bit of magic if needed."</p>
						      <div class="user">
							<img src="images/teams/ceo.jpg" alt="Pepole">
							<p><span>Don Aldtrump</span> CEO - Cicadya</p>
						      </div>
						    </div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-5 mt-lg-0">
				<div class="tabCommon">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="true">Vision</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="mission-tab" data-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false">Mission</a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="approch-tab" data-toggle="tab" href="#approch" role="tab" aria-controls="approch" aria-selected="false">Approach</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
					    <div class="tab-pane fade show active" id="vision" role="tabpanel" aria-labelledby="vision-tab">
						<p>Our vision is to redefine the future of data protection through encryption algorithms that combine power and seamless efficiency. We envision a world where every digital exchange is secured without compromise, ensuring privacy at every stage, from transmission to storage. By anticipating technological advancements, we aspire to be pioneers of a new digital era, where our encryption solutions become the standard rather than the exception. We firmly believe that security innovation is not just about meeting today’s expectations but about opening new horizons for tomorrow, ensuring proactive protection against emerging threats.</p>
					    </div>
					    <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
						<p>Our mission is to push the boundaries of encryption by reinventing paradigms where security meets innovation. Through cutting-edge encryption algorithms, we build digital bridges that transform information into an impenetrable virtual fortress. Every bit of data becomes a key, every operation a secret lock, and we are committed to refining these mechanisms with a bold vision. By integrating state-of-the-art technologies, we ensure unmatched resilience in data protection while anticipating the challenges of tomorrow. Our solutions do not just meet current needs—they transcend them, offering digital freedom while preserving confidentiality. Where others see obstacles, we see infinite possibilities.</p>
					    </div>
					    <div class="tab-pane fade" id="approch" role="tabpanel" aria-labelledby="approch-tab">
						<p>Our approach is based on a unique fusion of scientific rigor and technological agility. By combining expertise in cryptography with algorithmic creativity, we develop encryption solutions that adapt to all needs, even the most complex. Each project is an opportunity to push the boundaries of security, where our constant pursuit of excellence allows us to deliver algorithms that are both robust and optimized. We prioritize a collaborative approach, working hand in hand with our partners to co-create tailored solutions that address the specific challenges of each digital environment. Through an agile development methodology, we guarantee fast and reliable results while staying at the forefront of the latest technological advancements.</p>
					    </div>
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
