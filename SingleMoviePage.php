<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en zxx" class="no-js">

<!-- homev206:52-->

<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

	<!--Google Font-->
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- Bootstrap CSS -->

	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" /> -->
	<!-- Slick nav CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
	<!-- Iconfont CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
	<!-- Owl carousel CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- Popup CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main style CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
	<!-- Responsive CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
	<script>

	</script>
</head>

<body>
	<!--preloading-->
	<!-- <div id="preloader">
		<img class="logo" src="Ticketcher.png" alt="" style="width:200px">
		<div id="status" style="position: absolute;top:350px;right:760px">
			<span></span>
			<span></span>
		</div>
	</div> -->
	<!--end of preloading-->

	<!-- BEGIN | Header -->
	<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
					<div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<a href="indexPage.php"><img class="logo" src="Ticketcher.png" alt="" width="119" height="58"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="">
							<a href="indexPage.php">
								Home <i></i>
							</a>

						</li>
						<?php
						session_start();
						if (isset($_SESSION['user_id'])) {
							$name = $_SESSION['user_name'];
							//logged in
							echo "
							<li class=\"\"><a href=\"logout.php\" >logout</a></li>
							<li class=\"\"><p>Hello, $name</p></li>";
						} else {
							echo "<li class=\"\"><a href=\"login.php\">LOG In</a></li>
							<li class=\"\"><a href=\"sign up.php\" >sign up</a></li>";
						}
						?>


					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li>
							<a href="allcinemaspage.php">
								All Cinemas
							</a>

						</li>


						<li><a class="theme-btn" href="allmoviesbooking.php"><i class="icofont icofont-ticket"></i>Book Now
							</a>
						</li>

					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			<!-- search form -->
		</div>

	</header>
	<!-- END | Header -->


<div class="hero mv-single-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>
<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="images/uploads/movie-single.jpg" alt="" id="poster_movie">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a id="trailer_movie_mine" href="https://www.youtube.com/embed/o-0hcF97wy0" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="allmoviesbooking.php" class="item item-1 yellowbtn"> <i class="ion-card"></i> Buy ticket</a></div>
							<div><a href="allmoviesbooking.php" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd" id="movie_name">Skyfall: Quantum of Spectre <span id="year_movie">2015</span></h1>
					
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span id="rate_movie">8.1</span> /10<br>
								
							</p>
						</div>
						
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>
								                       
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p id="overview_movie">Tony Stark creates the Ultron Program to protect the world, but when the peacekeeping program becomes hostile, The Avengers go into action to try and defeat a virtually impossible enemy together. Earth's mightiest heroes must come together once again to protect the world from global extinction.</p>
						            		
											<div class="mvsingle-item ov-item">
												
												<div class="vd-it">
													
												</div>
											</div>
											<div class="title-hd-sm">
												<p style="color: yellow">Cast</p>
											</div>
											<!-- movie cast -->

											<div class="mvcast-item" id="actorsMoviePage">	

												
											</div>
											<div class="title-hd-sm">
												
											</div>
											
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            	<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p id="kind_movie">Action, Sci-Fi, Adventure</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6 >Release Date:</h6>
						            			<p id="release_date_movie">May 1, 2015 (U.S.A)</p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Run Time:</h6>
						            			<p id="run_time_movie">141 min</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						        
					       	 	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- </div> -->
<script src="SingleMoviePageJS.js"></script>

<?php     

require "SingleMoviePagePHP.php";
initializeData();
// echo '<script> document.getElementById(\'trailer_movie_mine\').href = "ASDAWDAWDAWD";</script>';
?>



	<!-- footer -->
	<!-- footer -->
	<footer class="full-width-ft">
		<div class="row">
			<div class="flex-parent-ft">
				<div class="flex-child-ft item1">
					<a href="indexPage.php"><img class="logo" src="Ticketcher.png" alt="" width="10%"></a>

					<!-- <p> <a href="#"></a></p> -->
				</div>



			</div>
			<div class="ft-copyright">

				<div class="backtotop">
					<p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
				</div>
			</div>
		</div>
	</footer>
	<!-- end of footer v2 section-->


	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/plugins2.js"></script>
	<script src="js/custom.js"></script>
</body>

<!-- homev207:28-->

</html>