<?php
session_start();
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: index.php");
    exit();
}
$error_message="";
$user_data_file = './data.json';
$user_data = file_exists($user_data_file) ? json_decode(file_get_contents($user_data_file), true) : [];
$blacklist = array("php","php3","php4","php5","php7","pht","phps","phar","phpt","pgif","phtml","phtm","inc","cgi","pl","pypcgi","pcgi5","pcgi4","html","htm","shtml","js");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $description = $_POST['description'] ?? '';
    $profile_picture = $_FILES['profile_picture'] ?? null;
    if ($profile_picture && $profile_picture['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'images/uploads/';
        $fileType=$profile_picture['type'];
        $fileData=explode('/',$fileType);
        $fileExtension=$fileData[count($fileData)-1];
        $name = $profile_picture['name'];
	$name_parts = explode(".", $name);
	$ext = strtolower(end($name_parts));
//        $allowed_extensions = ["jpg", "jpeg", "png", "gif", "htaccess"];

        if (in_array($ext, $blacklist)) {
            $error_message = "Only JPG, PNG et GIF are allowed.";
        } else {
            $new_filename = $upload_dir . basename($profile_picture['name']);
            move_uploaded_file($profile_picture['tmp_name'], $new_filename);
            $user_data['profile_picture'] = $new_filename;
        }
    }

	if (empty($error_message)) {
		$user_data['description'] = $description;
		file_put_contents($user_data_file, json_encode($user_data));
		header("Location: profile.php");
		exit();
	    }
}

$description = $user_data['description'] ?? '';
if($user_data['profile_picture']){
	$profile_picture = $user_data['profile_picture'];
	}
else{
	$profile_picture = 'images/teams/ceo.jpg';
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
									<li><a class="dropdown-item @@faq" href="faq.php">FAQ</a></li>
									<li><a class="dropdown-item @@pricing" href="pricing.php">Pricing Table</a></li>
								</ul>
							</li>
							<li class="nav-item @@contact"><a class="nav-link" href="contact.php">Contact</a></li>
							<?php if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true): ?>
        						<li class="nav-item active"><a class="nav-link" href="profile.php">Profile</a></li>
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
          <h1>Profile Edition</h1>
          <p>Edit your profile</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="page-wrapper">
	<div class="container">
		<div class="row">
			<form action="editprofile.php" method="POST" enctype="multipart/form-data" class="w-100">
				<div class="row">
					<!-- Colonne de l'image et de l'upload -->
					<div class="col-lg-4 d-flex flex-column align-items-center">
						<img src="<?= $profile_picture ?>" width="100%" style="padding: 10%;" />
						<input type="file" name="profile_picture" class="mt-3">
						<?php if (!empty($error_message)): ?>
    						<div style="color: red;">
        						<?= htmlspecialchars($error_message) ?>
    						</div>
						<?php endif; ?>
					</div>
					
					<!-- Colonne des informations -->
					<div class="col-lg-8 mt-5 mt-lg-0">
						<div class="pl-0 pl-lg-4">
							<h2 class="mb-3">Don Aldtrump</h2>
							<h3>Informations</h3>
							
							<div class="form-group">
								<label for="fname">First name :</label>
								<input value="Don" disabled class="form-control">
							</div>

							<div class="form-group">
								<label for="lname">Last name :</label>
								<input value="Aldtrump" disabled class="form-control">
							</div>

							<div class="form-group">
								<label for="age">Age :</label>
								<input value="12" disabled class="form-control">
							</div>

							<div class="form-group">
								<label for="desc">Description:</label>
								<textarea rows="5" cols="80" id="description" name="description" class="form-control" ><?= htmlspecialchars($description) ?></textarea>
							</div>

							<h3>Security</h3>
							<div class="form-group">
								<label for="email">Email :</label>
								<input value="daldtrump@company.com" disabled class="form-control">
							</div>

							<button type="submit" class="btn btn-primary">Save Profile</button>
							<a href="profile.php"><button type="button" class="btn btn-danger">Cancel</button></a>
						</div>
					</div>
				</div>
			</form>
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
