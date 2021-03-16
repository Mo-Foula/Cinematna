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
	<div id="preloader">
		<img class="logo" src="Ticketcher.png" alt="" style="width:200px">
		<div id="status" style="position: absolute;top:350px;right:760px">
			<span></span>
			<span></span>
		</div>
	</div>
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

	<div class="slider sliderv2">
		<div class="container">
			<!-- <div class="row"> -->
			<div class="slider-single-item">
				<div class="movie-item">
					<div class="row">
						<div class="col-md-8 col-sm-12 col-xs-12">
							<div class="title-in">
								<h1><a href="#">Latest Movies<br>
										<span>Enjoy your Movie</span></a></h1>
								<div class="social-btn">
									<a href="#homepage_movietrailer" class="parent-btn"><i class="ion-play"></i> Watch
										Trailer</a>


								</div>
								<div class="btn-transform transform-vertical movie-item">
									<div><a href="allmoviesbooking.php" class="item item-1 redbtn">more detail</a></div>
									<div><a href="allmoviesbooking.php" class="item item-2 redbtn hvrbtn">more detail</a>
									</div>
								</div>
							</div>
							<!-- <div  class="slick-multiItemSlider"> -->
							<div class="row container" style="position: relative;left:250px;bottom:100px">
								<div class="mv-img">

									<div class="container">

										<div class="cards-wrapper">
											<div class="button" style="position:relative;right:340px;top:210px" onclick="shiftLeft()"><img src="images/nivo/prev.png" alt=""></div>
											<ul class="cards__container " id="carouselfirstpart">


											</ul>
											<div class="button" style="position:relative;left:330px;top:-200px" onclick="shiftRight()"><img src="images/nivo/next.png" alt=""></div>
										</div>

									</div>
									<!-- <script src='js/index.js'></script> -->



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
	</div>

	<!-- In Theater -->
	<div class="movie-items  full-width">
		<div class="row">
			<div class="col-md-12">
				<div class="title-hd">
					<h2 id="mymymymy">in theater</h2>
					<a href="allmoviesbooking.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="tabs">
					<ul class="tab-links">
						<li class="active"><a href="#tab1-h2">#Popular</a></li>
						<li><a href="#tab2-h2"> #Coming soon</a></li>
						<li><a href="#tab3-h2"> #Top rated </a></li>
						<!-- <li><a href="#tab4-h2"> #Most reviewed</a></li> -->
					</ul>
					<div class="tab-content">
						<div id="tab1-h2" class="tab active">
							<div class="row">
								<div class="slick-multiItem2" id="popularmoviesinhomepage">

								</div>
							</div>
						</div>
						<div id="tab2-h2" class="tab">
							<div class="row">
								<div class="slick-multiItem2"  id = "commingsoonsectionhomepage">
									
								</div>
							</div>
						</div>
						<div id="tab3-h2" class="tab">
							<div class="row">
								<div class="slick-multiItem2" id="topratedhomepage">
								</div>
							</div>
						</div>
						<div id="tab4-h2" class="tab">
							<div class="row">
								<div class="slick-multiItem2" id= "commingsoonsectionhomepage">
									<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<img src="images/uploads/mv-it5.jpg" alt="">
											</div>
											<div class="hvr-inner">
												<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i>
												</a>
											</div>
											<div class="title-in">
												<h6><a href="#">Die hard</a></h6>
												<p><i class="ion-android-star"></i><span>7.4</span>
													/10</p>
											</div>
										</div>
									</div>
									<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<img src="images/uploads/mv-it6.jpg" alt="">
											</div>
											<div class="hvr-inner">
												<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i>
												</a>
											</div>
											<div class="title-in">
												<h6><a href="#">Interstellar</a></h6>
												<p><i class="ion-android-star"></i><span>7.4</span>
													/10</p>
											</div>
										</div>
									</div>
									<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<img src="images/uploads/mv-it7.jpg" alt="">
											</div>
											<div class="hvr-inner">
												<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i>
												</a>
											</div>
											<div class="title-in">
												<h6><a href="#">Die hard</a></h6>
												<p><i class="ion-android-star"></i><span>7.4</span>
													/10</p>
											</div>
										</div>
									</div>
									<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<img src="images/uploads/mv-it8.jpg" alt="">
											</div>
											<div class="hvr-inner">
												<a href="moviesingle.html"> Read more <i class="ion-android-arrow-dropright"></i>
												</a>
											</div>
											<div class="title-in">
												<h6><a href="#">Die hard</a></h6>
												<p><i class="ion-android-star"></i><span>7.4</span>
													/10</p>
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
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- part 2 -->
	<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="allmoviesbooking.php" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
					<div class="slider-for-2 video-ft" id="homepage_movietrailer">

					</div>
					<div class="slider-nav-2 thumb-ft" id="trailer_thumbnail_homepage">

					</div>
				</div>
			</div>
		</div>
	</div>

	</div>

	<!-- end part 2 -->
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

	<script src="index.js"></script>
	<?php
	require 'index.php';
	initialize();
	echo '
			<script src="js/jquery.js"></script>
			<script src="js/plugins.js"></script>
			<script src="js/plugins2.js"></script>
			<script src="js/custom.js"></script>';
	?>
</body>

<!-- homev207:28-->

</html>