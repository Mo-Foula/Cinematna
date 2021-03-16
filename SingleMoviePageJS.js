

function setMovieName(MovieName,year,rate,poster,description,runTime,MovieTrailer) {     

var movie_name= document.getElementById("movie_name");
var release_date_movie= document.getElementById("release_date_movie");
var rate_movie= document.getElementById('rate_movie');
var poster_movie= document.getElementById('poster_movie');
var overview_movie= document.getElementById('overview_movie');
//var first_actor= document.getElementById('first_actor'); //++++++++++++++++++++++++++++

var release_date_movie= document.getElementById('release_date_movie');
var run_time_movie= document.getElementById('run_time_movie');
var trailer_movie=document.getElementById('trailer_movie_mine');


trailer_movie.href=MovieTrailer;

console.log(poster_movie);
movie_name.innerHTML=MovieName;
release_date_movie.innerHTML=year;
rate_movie.innerHTML=rate;
poster_movie.src=poster;
overview_movie.innerHTML=description;
run_time_movie.innerHTML=runTime;
}
function setActors(actors){ 
	
	var code=` <div class="cast-it">
					<div class="cast-left">
					<a href="#" >`+actors+`</a>
					
						</div>
													
						</div>`;

document.getElementById('actorsMoviePage').innerHTML+=code;

}


function setGenres(genres){
document.getElementById('kind_movie').innerHTML=genres;
}

//setMovieName("A Beautiful");
//var Ac=["Ahmed", "mohamed","foula","layla El Sayed Ahmed"];
//setActors(Ac);

/*
movie_name.innerHTML="A Beautiful Mind";
year_movie.innerHTML="2020";
rate_movie.innerHTML="5";
poster_movie.innerHTML="";
overview_movie.innerHTML="Walahy zai el fol";
first_actor.innerHTML="Ahmed Helmy";
run_time_movie.innerHTML="aaaaaaaaaaaaaaaaaaaaa";
	*/
