<!DOCTYPE html>
<html lang="en" class="no-js">


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

	<script>
		function generateReview(title, comment, user_name, rating){
			rating = Math.round(rating);
			// var stars = ;
			// var empty_stars = '<i class="ion-android-star"></i>';
			var stars = '<i class="ion-android-star"></i>'.repeat(rating)+'<i class="ion-android-star last"></i>'.repeat(10-rating);

			// console.log('<i class="ion-android-star"></i>'*rating + '<i class="ion-android-star"></i>'* (10-rating));
			// var stars = '<i class="ion-android-star"></i>'*rating + '<i class="ion-android-star"></i>'* (10-rating);
			
			return `
			<div class="mv-user-review-item">
								<div class="user-infor">
									<div>
										<h3>`+title+`</h3>
										<div class="no-star">
										`+stars+
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star"></i>
											// <i class="ion-android-star last"></i>
										`</div>
										<p class="time">
											`
											// +date
											//17 December 2016
											 +` by `+user_name //<a href="#"> `+user_name+`</a>
										+`</p>
									</div>
								</div>
								<p>`+comment+`</p>
							</div>
			`;
		}
		function movieGrid(name, imgsrc, rating, movieLink, id){
			return `<div style="100%; " class=" movie-item-style-1">

									<img src=`+imgsrc+` alt="">
									<div class="hvr-inner">
	            				<a  href=`+movieLink+`> Read more <i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
									<center>
										<div class="mv-item-infor hoverrrrrrrrrrrrrrr">
											<h6><a style="" href=`+movieLink+`>`+name+`</a></h6>
											<p class="rate"><i class="ion-android-star"></i><span>`+rating+`</span> /10</p>
										</div>
									</center>
								</div>	`;
		}



	</script>

	<style>
		
		.hoverrrrrrrrrrrrrrr :hover{
 			 color: #dcf836;
		}
	</style>
	
</head>

<body>



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
					<div class="movie-img ">
						<img alt="" id="poster_movie">
						
					</div>
				</div>
				


 <div class="col-md-8 col-sm-12 col-xs-12">
	<div class="movie-single-ct main-content">
		<h1 class="bd-hd" id="movie_name"></h1>
		

		<div class="movie-rate">
			<div class="rate">
				<i class="ion-android-star"></i>
				<p><span id="rate_movie"></span> /10<br>

				</p>
			</div>
		</div>
		<h2 style="color: aliceblue;">Location: <span id='cinema_location'></span></h2>
		<div class="movie-tabs">
			<div class="tabs">
				<ul class="tab-links tabs-mv">
					<li class="active"><a href="#movies">Movies</a></li>
					<li><a href="#reviews"> Reviews</a></li>                  
				</ul>
				<div class="tab-content">
					<div id="movies" class="tab active">
						<div class="row">
							<div class="flex-wrap-movielist" id="moviesinhere">
									<script>
										//TODO
										// movieGrid('LaLaLand',"images/uploads/mv3.jpg",8.2,'google.com',1);
										// movieGrid('X-Men',"images/uploads/mv2.jpg",8.2,'google.com',1);
										// movieGrid('ASDAD',"images/uploads/mv4.jpg",8.2,'google.com',1);
										// movieGrid('LaLaLand',"images/uploads/mv3.jpg",8.2,'google.com',1);
										// movieGrid('X-Men',"images/uploads/mv2.jpg",8.2,'google.com',1);
										// movieGrid('ASDAD',"images/uploads/mv4.jpg",8.2,'google.com',1);
										// movieGrid('LaLaLand',"images/uploads/mv3.jpg",8.2,'google.com',1);
										// movieGrid('X-Men',"images/uploads/mv2.jpg",8.2,'google.com',1);
										// movieGrid('ASDAD',"images/uploads/mv4.jpg",8.2,'google.com',1);
									</script>	
							</div>	
						</div>
					</div>
					<div id="reviews" class="tab review">
					   <div class="row" id ="CinemaReviewsArea">
							<div class="rv-hd">
								<div class="div">
									<h3>Top Reviews</h3>
										<!-- <h2 >Skyfall: Quantum of Spectre</h2> -->
								</div>
								<a href="#" class="redbtn">Write Review</a>
							</div>
							<!-- <div class="topbar-filter">
								<p>Found <span>56 reviews</span> in total</p>
								<label>Filter by:</label>
								<select>
									<option value="popularity">Popularity Descending</option>
									<option value="popularity">Popularity Ascending</option>
									<option value="rating">Rating Descending</option>
									<option value="rating">Rating Ascending</option>
									<option value="date">Release date Descending</option>
									<option value="date">Release date Ascending</option>
								</select>
							</div> -->
							<!-- <div class="mv-user-review-item">
								<div class="user-infor">
									<div>
										<h3>Best Marvel movie in my opinion</h3>
										<div class="no-star">
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star last"></i>
										</div>
										<p class="time">
											17 December 2016 by <a href="#"> hawaiipierson</a>
										</p>
									</div>
								</div>
								<p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
							</div>
							<div class="mv-user-review-item">
								<div class="user-infor">
									<img src="images/uploads/userava2.jpg" alt="">
									<div>
										<h3>Just about as good as the first one!</h3>
										<div class="no-star">
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
										</div>
										<p class="time">
											17 December 2016 by <a href="#"> hawaiipierson</a>
										</p>
									</div>
								</div>
								<p>Avengers Age of Ultron is an excellent sequel and a worthy MCU title! There are a lot of good and one thing that feels off in my opinion. </p>

								<p>THE GOOD:</p>

								<p>First off the action in this movie is amazing, to buildings crumbling, to evil blue eyed robots tearing stuff up, this movie has the action perfectly handled. And with that action comes visuals. The visuals are really good, even though you can see clearly where they are through the movie, but that doesn't detract from the experience. While all the CGI glory is taking place, there are lovable characters that are in the mix. First off the original characters, Iron Man, Captain America, Thor, Hulk, Black Widow, and Hawkeye, are just as brilliant as they are always. And Joss Whedon fixed my main problem in the first Avengers by putting in more Hawkeye and him more fleshed out. Then there is the new Avengers, Quicksilver, Scarletwich, and Vision, they are pretty cool in my opinion. Vision in particular is pretty amazing in all his scenes.</p>

								<p>THE BAD:</p>

								<p>The beginning of the film it's fine until towards the second act and there is when it starts to feel a little rushed. Also I do feel like there are scenes missing but there was talk of an extended version on Blu-Ray so that's cool.</p>
							</div>
							<div class="mv-user-review-item">
								<div class="user-infor">
									<img src="images/uploads/userava3.jpg" alt="">
									<div>
										<h3>One of the most boring exepirences from watching a movie</h3>
										<div class="no-star">
											<i class="ion-android-star"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
										</div>
										<p class="time">
											 26 March 2017 by<a href="#"> christopherfreeman</a>
										</p>
									</div>
								</div>
								<p>I can't right much... it's just so forgettable...Okay, from what I remember, I remember just sitting down on my seat and waiting for the movie to begin. 5 minutes into the movie, boring scene of Tony Stark just talking to his "dead" friends saying it's his fault. 10 minutes in: Boring scene of Ultron and Jarvis having robot space battles(I dunno:/). 15 minutes in: I leave the theatre.2nd attempt at watching it: I fall asleep. What woke me up is the next movie on Netflix when the movie was over.</p>

								<p>Bottemline: It's boring...</p>

								<p>10/10 because I'm a Marvel Fanboy</p>
							</div>
							<div class="mv-user-review-item ">
								<div class="user-infor">
									<img src="images/uploads/userava4.jpg" alt="">
									<div>
										<h3>That spirit of fun</h3>
										<div class="no-star">
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
										</div>
										<p class="time">
											26 March 2017 by <a href="#"> juliawest</a>
										</p>
									</div>
								</div>
								<p>If there were not an audience for Marvel comic heroes than clearly these films would not be made, to answer one other reviewer although I sympathize with him somewhat. The world is indeed an infinitely more complex place than the world of Marvel comics with clearly identifiable heroes and villains. But I get the feeling that from Robert Downey, Jr. on down the organizer and prime mover as Iron Man behind the Avengers these players do love doing these roles because it's a lot of fun. If they didn't show that spirit of fun to the audience than these films would never be made.</p>

								<p>So in that spirit of fun Avengers: Age Of Ultron comes before us and everyone looks like they're having a good time saving the world. A computer program got loose and took form in this dimension named Ultron and James Spader who is completely unrecognizable is running amuck in the earth. No doubt Star Trek fans took notice that this guy's mission is to cleanse the earth much like that old earth probe NOMAD which got its programming mixed up in that classic Star Trek prime story. Wouldst Captain James T. Kirk of the Enterprise had a crew like Downey has at his command.</p>
								<p>My favorite is always Chris Evans because of the whole cast he best gets into the spirit of being a superhero. Of all of them, he's already played two superheroes, Captain America and Johnny Storm the Human Torch. I'll be before he's done Evans will play a couple of more as long as the money's good and he enjoys it.</p>

								<p>Pretend you're a kid again and enjoy, don't take it so seriously.</p>
							</div>
							<div class="mv-user-review-item last">
								<div class="user-infor">
									<img src="images/uploads/userava5.jpg" alt="">
									<div>
										<h3>Impressive Special Effects and Cast</h3>
										<div class="no-star" >
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star"></i>
											<i class="ion-android-star last"></i>
											<i class="ion-android-star last"></i>
										</div>
										<p class="time">
											26 March 2017 by <a href="#"> johnnylee</a>
										</p>
									</div>
								</div>
								<p>The Avengers raid a Hydra base in Sokovia commanded by Strucker and they retrieve Loki's scepter. They also discover that Strucker had been conducting experiments with the orphan twins Pietro Maximoff (Aaron Taylor-Johnson), who has super speed, and Wanda Maximoff (Elizabeth Olsen), who can control minds and project energy. Tony Stark (Robert Downey Jr.) discovers an Artificial Intelligence in the scepter and convinces Bruce Banner (Mark Ruffalo) to secretly help him to transfer the A.I. to his Ultron defense system. However, the Ultron understands that is necessary to annihilate mankind to save the planet, attacks the Avengers and flees to Sokovia with the scepter. He builds an armature for self-protection and robots for his army and teams up with the twins. The Avengers go to Clinton Barton's house to recover, but out of the blue, Nick Fury (Samuel L. Jackson) arrives and convinces them to fight against Ultron. Will they succeed? </p>

								<p>"Avengers: Age of Ultron" is an entertaining adventure with impressive special effects and cast. The storyline might be better, since most of the characters do not show any chemistry. However, it is worthwhile watching this film since the amazing special effects are not possible to be described in words. Why Pietro has to die is also not possible to be explained. My vote is eight.</p>
							</div> -->
							<!-- <div class="topbar-filter">
								<label>Reviews per page:</label>
								<select>
									<option value="range">5 Reviews</option>
									<option value="saab">10 Reviews</option>
								</select>
								<div class="pagination2">
									<span>Page 1 of 6:</span>
									<a class="active" href="#">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#">5</a>
									<a href="#">6</a>
									<a href="#"><i class="ion-arrow-right-b"></i></a>
								</div>
							</div> -->
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
	<?php require 'CinemaPage.php';
	initializeData();
	?>
	<script>

		// var img = 'images/san.jpg';
		// document.getElementById('poster_movie').src = img;
		// var cinemaname = 'Cinema San Stefano';
		// document.getElementById('movie_name').innerHTML = cinemaname;
		// var cinemalocation = 'San Stefano Mall, Alexandria, Egypt';
		// document.getElementById('cinema_location').innerHTML = cinemalocation;
		// var cinemarating = 8.1;
		// document.getElementById('rate_movie').innerHTML = cinemarating;
	</script>
	<!-- <script src="MoviePageJS.js">



</script> -->

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>
<script src="js/plugins2.js"></script>
<script src="js/custom.js"></script>
</body>

</html>