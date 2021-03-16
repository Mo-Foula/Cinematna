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

	</header>  <style type="text/css">    
        
        .modalclass{
            position: absolute;
            top: 8px;
        left: 460px;
            width: 66%;
            
        }
        
        .nn{
            top: 380px;
        left: 1px;
            position: absolute;
            font-size: 600;
        }
        .modalclass h3{
              top: 450px;
        left: 1px;
            position: absolute;
        }
        .MovieDescription{
              top: 500px;
        left: 1px;
            position: absolute;
        }
        .modalclass input{
              top: 1000px;
            left: 1px;
            position: absolute;
            width: 10%;
        }
        .DropDown2{
              top: 1000px;
        left: 170px;
            position: absolute;
        }
        .modalclass a{
              top: 900px;
        left: 1px;
            position: absolute;
        }
        .modalclass .btn{
              top: 1000px;
        left: 900px;
            position: absolute;
            color: white;
        position: absolute;
        font-weight: bold;
        cursor: pointer;
        padding: 10px;
        background-color: #dd003f;
        }
        
        
        
    </style>
    
    <script>
 function movieTicketsPage(movie_id,party_id,party){
    document.getElementById("select_party").innerHTML+=
    `<option value="`+party_id+`" >`+party+`</option>
    
`};
     
        function setMovie(movie_name,poster_movie, overview_movie) {
console.log(movie_name)
var movieName= document.getElementById("movie_name");
var posterMovie= document.getElementById('poster_movie');
var overviewMovie= document.getElementById('overview_movie');

movieName.innerHTML=movie_name;
posterMovie.src=poster_movie;
overviewMovie.innerHTML=overview_movie;
}
   
	</script>
	<!-- END | Header -->
<div class="hero common-hero">
    <h1>Book Tickets</h1>
    </div>
    
    <div id="movieBookingPageObject"> 
    <div>
            <img id="poster_movie" src="images/uploads/mv1.jpg" width="450">

    </div>
    <div class="modalclass">
          <h1 id="movie_name" class="nn">*Movie Name*</h1>

	     <h3>Description: </h3>
         
    <div class="MovieDescription" id="overview_movie">
                            *Description of movie goes here*
                        </div>
                        <a href="SingleMoviePage.php?id=<?php echo $_GET['id'];?>">View Movie Page</a>
        <form method="get" action="seatsbooking/seatsbooking.php">                
        <input type="date" name="date" min='<?php echo date("Y-m-d"); ?>' />
                
                        <div class="DropDown2">
                            <select name="party_id" id="select_party">
                                <option value="" disabled selected hidden>Choose Party</option>
                                
                            </select>
    
    
     
    </div> 
            
    <input class="btn" type="submit" name="submit" value="Book Seats">
    </form>
            </div>
    </div>
    
<div class="page-single"> 
           
   

</div>
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
<!--
    <script>
    setMovie("boshkash",'images/uploads/mv1.jpg' ,"blablabla");
    </script>
-->
    
    <?php require 'allmoviesbookingphp.php';?>
     
    <?php
    initializeData2();
        
    ?>
    
</body>
    
    
 

<!-- homev207:28-->

</html>