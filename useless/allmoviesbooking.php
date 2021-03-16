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
							<a href="#">
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


						<li><a class="theme-btn" href="#"><i class="icofont icofont-ticket"></i>Book Now
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



    <style type="text/css">
    
    .modal-bg{
	position: fixed;
	width: 100%;
	height: 100vh;
	top: 0;
	left: 0;
	background-color: rgba(0,0,0,0.5);
	display: flex;
	justify-content: center;
	align-items: center;
	visibility: hidden;
	opacity: 0;	
	transition: visibility 0s ,opacity 0.5s ;
    z-index: 100;
}

.bg-active{
	visibility: visible;
	opacity: 1;

}


.modal{
	position: relative;
	font-family: 'Montserrat',sans-serif;
	background-color: white;
	width: 78.7%;
	height: 78.7%;
	display: flex;
	justify-content: space-around;
	align-items: center;
    flex-direction: column;
    }
    
    .modal h1{
        color: black;
        position: absolute;
        font-weight: bold;
        top: 8px;
        left: 460px;
        font-size: 35px;
        }
        
    
        .modal h2{
            color: black;
        position: absolute;
        font-weight: bold;
        top: 85px;
        left: 460px;
        font-size: 30px
        
    }
        .modal a{
            color: black;
        position: absolute;
        font-weight: bold;
        top: 400px;
        left: 460px;
        
    }
        .modal p{
            color: black;
        position: absolute;
        font-weight: bold;
        top: 485px;
        left: 460px;
        
    }
        
    .MovieDescription{
        color: black;
        position: absolute;
        font-weight: 100;
        top: 125px;
        left: 460px;
    }
    
    .modal button{
        color: white;
        position: absolute;
        font-weight: bold;
        cursor: pointer;
        bottom: 20px;
        right: 30px;
        padding: 10px;
        background-color: #dd003f;
    }
    
    .modal img{
        position: absolute;
        top: 30px;
        bottom: 30px;
        left: 30px;
        width: 35%;
        height: 90%;
    }
    
    .modal-close{
    position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
    cursor: pointer;
    }
  
    .DropDown{
        position: absolute;
        left: 460px;
        bottom: 50px;
     }
        
        .DropDown2{
        position: absolute;
        left: 600px;
        bottom: 50px;
        }
    </style>
    
	<script>
 
    function moviegrid(movie_name,poster_movie, rate_movie){
    document.getElementById("ana hagenerate movies").innerHTML+=
    `<div class="movie-item-style-2 movie-item-style-1">
							<img src=`+poster_movie+` alt="">
							<div class="hvr-inner">
	            			 <a href="modalpage.php?id=''"> Book Now <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6 ><a href="#">`+movie_name+`</a></h6>
								<p class="rate" ><i class="ion-android-star"></i><span>`+rate_movie+`</span> /10</p>
							</div>
						</div>
`;
        
    }
//        function popup(){
//        document.getElementById("modal popup content").innerHTML+=
//        }
	</script>
    <div class="hero common-hero">
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist mv-grid-fw" id="ana hagenerate movies">
				</div>		
				
			</div>
		</div>
	</div>
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
    <script type="text/javascript">
	
function f(){

modalBg.classList.add('bg-active');
}

  
     
var modalBtn= document.querySelector('.modal-btn');
var modalBg= document.querySelector('.modal-bg');
var modalClose= document.querySelector('.modal-close');
var bookSeatsButton= document.querySelector('.modal button');
        
modalClose.addEventListener('click',function(){
modalBg.classList.remove('bg-active');
});
     modalBtn.addEventListener('click',function(){
modalBg.classList.add('bg-active');
});
    bookSeatsButton.addEventListener('click',function(){
modalBg.classList.remove('bg-active');
});
    </script>

    <?php require 'allmoviesbookingphp.php';?>
     
    <?php
    initializeData();
    ?>
    
    </body>

<!-- homev207:28-->

</html>