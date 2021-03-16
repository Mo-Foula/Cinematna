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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet"
		type="text/css">
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
	            			 <a onclick="f()"> Book Now <i class="ion-android-arrow-dropright"></i> </a>
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
</head>

<body>
    
    
    <div class="modal-bg" id="modal popup content">
	
<div class="modal">
    <p>Book Tickets</p>
    <h1 id="movie_name">*Movie Name*</h1>
	<h2>Description: </h2>
    <button onclick="trialtrialtrial.php">Book Seats</button>
    <img src="images/uploads/mv1.jpg" id="poster_movie">
	<span class="modal-close">X</span>
<div class="MovieDescription" id="overview_movie">
        *Description of movie goes here*
    </div>
    <a href="MoviePage.php">View Movie</a>
<div class="DropDown">
    <select id="select_day">
    <option value="" disabled selected hidden>Choose Day</option>
    </select>
    </div>
    <div class="DropDown2">
    <select id="select_party">
        <option value="" disabled selected hidden>Choose Party</option>
        <option value="">Non 3D, Cinema Amir, Hall 1, 2 PM</option>
    </select>
    
    
     
    </div>    
        </div>	

</div>
	<!--preloading-->
	<!-- <div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div> -->
	<!--end of preloading-->
	<!--login form popup-->
	<div class="login-wrapper" id="login-content">
		<div class="login-content">
			<a href="#" class="close">x</a>
			<h3>Login</h3>
			<form method="post" action="#">
				<div class="row">
					<label for="username">
						Username:
						<input style="background-color: rgb(253, 253, 253);" type="text" name="username"
							id="username" placeholder="Hugh Jackman"
							pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
					</label>
				</div>

				<div class="row">
					<label for="password">
						Password:
						<input style="background-color: rgb(253, 253, 253);" type="password" name="password"
							id="password" placeholder="******"
							pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
							required="required" />
					</label>
				</div>
				<div class="row">
					<div class="remember">
						<div>
							<input type="checkbox" name="remember" value="Remember me"><span>Remember
								me</span>
						</div>
						<a href="#">Forget password ?</a>
					</div>
				</div>
				<div class="row">
					<button type="submit">Login</button>
				</div>
			</form>

		</div>
	</div>
	<!--end of login form popup-->
	<!--signup form popup-->
	<div class="login-wrapper" id="signup-content">
		<div class="login-content">
			<a href="#" class="close">x</a>
			<h3>sign up</h3>
			<form method="post" action="#">
				<div class="row">
					<label for="username-2">
						Username:
						<input style="background-color: rgb(253, 253, 253);" type="text" name="username"
							id="username-2" placeholder="Hugh Jackman"
							pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
					</label>
				</div>

				<div class="row">
					<label for="email-2">
						your email:
						<input style="background-color: rgb(253, 253, 253);" type="password" name="email"
							id="email-2" placeholder=""
							pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
							required="required" />
					</label>
				</div>
				<div class="row">
					<label for="password-2">
						Password:
						<input style="background-color: rgb(253, 253, 253);" type="password" name="password"
							id="password-2" placeholder=""
							pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
							required="required" />
					</label>
				</div>
				<div class="row">
					<label for="repassword-2">
						re-type Password:
						<input style="background-color: rgb(253, 253, 253);" type="password" name="password"
							id="repassword-2" placeholder=""
							pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
							required="required" />
					</label>
				</div>
				<!-- <div class="row">
			<p>Or via social</p>
		    <div class="social-btn-2">
			    <a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
			    <a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
		    </div>
		</div> -->
				<div class="row">
					<button type="submit">sign up</button>
				</div>
			</form>
		</div>
	</div>
	<!--end of signup form popup-->

	<!-- BEGIN | Header -->
	<header class="ht-header full-width-hd">
		<div class="row">
			<nav id="mainNav" class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
					<div class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119"
							height="58"></a>
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
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class=" signupLink"><a href="#">sign up</a></li>


					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown"
								data-hover="dropdown">
								pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Light Theme</a></li>

								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>
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
	<footer class="full-width-ft" >
		<div class="row">
			<div class="flex-parent-ft">
				<div class="flex-child-ft item1">
					<a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
					
					<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
				</div>
				<div class="flex-child-ft item2">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">About</a></li>
						
						<li><a href="#">Contact Us</a></li>
						
					</ul>
				</div>
				
				
			</div>
			<div class="ft-copyright" >

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

    <?php include 'allmoviesbookingphp.php';?>
     
    <?php
    initializeData();
    ?>
    
    </body>

<!-- homev207:28-->

</html>