<?php
include "database.php";

function get_whatchedHistory($db, $user_id)
{
    $query = "SELECT * FROM ticket WHERE user_id=$user_id";
    $tickets = mysqli_query($db,$query);
    if($tickets->num_rows<=0){
        echo "<h1 style='margin: 50px 25px;'>We suggest watching </h1>";
        get_allmovies($db);
    }else{
        echo "<h1 style='margin: 50px 25px;'>You Have Watched </h1>";
        $query2 = "SELECT * FROM movie NATURAL JOIN party NATURAL JOIN ticket WHERE movie.movie_id = party.movie_id AND ticket.user_id = $user_id";
        $moviesWatched = mysqli_query($db,$query2);
        printMovies($db,$moviesWatched);
    }
}
function get_allgenres($db)
{
    $query = "SELECT * FROM genre";
    $genres = mysqli_query($db, $query);
    if ($genres->num_rows <= 0) {
        echo "<h1>No post found</h1>";
    }

    while ($row = mysqli_fetch_assoc($genres)) {
        $genre_id = $row['genre_id'];
        $genre_name = $row['genre_name'];
        // echo $genre_id;
        echo "<li class='menu-item menu-item-type-custom menu-item-object-custom'>";
        echo "<a href='genres.php?genre=$genre_id'>$genre_name</a>";
        echo "</li>";
    }
}
function get_movie_actors($db, $movie_id)
{
    $query = "SELECT * FROM actor NATURAL JOIN actor_movie WHERE actor_id = actor_id AND movie_id = $movie_id";
    $actors_in_movie = mysqli_query($db, $query);
    if ($actors_in_movie->num_rows <= 0) {
        return "<h1>No post found</h1>";
    }
    $str = "";
    while ($row = mysqli_fetch_assoc($actors_in_movie)) {
        $actor_id = $row['actor_id'];
        $actor_name = $row['actor_name'];
        $str .= "<a href='$actor_id'>$actor_name</a>, ";
    }
    // print_r(($str));  
    return $str;
}
function get_movie_genres($db, $movie_id)
{
    $query = "SELECT * FROM genre NATURAL JOIN genre_movie WHERE genre_id = genre_id AND movie_id = $movie_id";
    $genres_of_movie = mysqli_query($db, $query);
    if ($genres_of_movie->num_rows <= 0) {
        return "<h1>No post found</h1>";
    }
    $str = "";
    while ($row = mysqli_fetch_assoc($genres_of_movie)) {
        $genre_id = $row['genre_id'];
        $genre_name = $row['genre_name'];
        $str .= "<a href='$genre_id'>$genre_name</a>, ";
    }
    // print_r(($str));
    return $str;
}
function get_movie_local_rating($db, $movie_id)
{
    $query = "SELECT AVG(rating_stars) AS avg FROM movie_rating WHERE movie_id = $movie_id";
    $rating = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($rating);
    // print_r($row['avg']);
    return $row['avg'];
}
function get_votes_count($db, $movie_id)
{
    $query = "SELECT count(rating_stars) AS count FROM movie_rating WHERE movie_id = $movie_id";
    $count = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($count);
    return $row['count'];
}
function get_allmovies($db)
{
    $query = "SELECT * FROM movie";
    $movie = mysqli_query($db, $query);
    if ($movie->num_rows <= 0) {
        return "<h1>No post found</h1>";
    }
    printMovies($db,$movie);
}
function printMovies($db,$movie){

    while ($row = mysqli_fetch_assoc($movie)) {
        $movie_id = $row['movie_id'];
        $movie_name = $row['movie_name'];
        $movie_des = $row['movie_des'];
        $movie_rate = $row['movie_rate'];
        $movie_poster = $row['movie_poster'];
        if ($row['movie_3d']) $movie_3d = "Yes";
        else $movie_3d = "No";

        if ($row['movie_foreign']) $movie_foreign = "Yes";
        else $movie_foreign = "No";

        $actors = get_movie_actors($db, $movie_id);
        $genres = get_movie_genres($db, $movie_id);

        $rating = get_movie_local_rating($db, $movie_id);
        if (empty($rating)) $local_rating = "0";
        else $local_rating = $rating;

        $count = get_votes_count($db, $movie_id);
        if (empty($count)) $local_vote_count = "0";
        else $local_vote_count = $count;


        // Note To self
        /*
        Data That were removed,
        movie Directors, movie duration, movie relase date, movie language
        */
        echo "<article class='entry-item clearfix'>
                <div class='entry-thumb'>
                    <img
                        width='205'
                        height='347'
                        src='$movie_poster'
                        class='attachment-205x347 size-205x347'
                        alt='movie img'
                        srcset=''
                        sizes='(max-width: 205px) 100vw, 205px'/>
                </div>
                <div class='entry-content'>
                    <h2 class='entry-title'><a href='movie.html?movie_id=$movie_id'>$movie_name</a></h2>
                    <ul class='info-list'>
                        <li>
                            <label>Actor:</label>
                                <span>$actors
                    </span>
                        </li>
                        <li>
                            <label>Genre:</label>
                                <span>$genres</span>
                        </li>
                        <li>
                            <label>3D:</label>
                                <span>$movie_3d</span>
                        </li>
                        <li>
                            <label>Foreign:</label><span>$movie_foreign</span>
                        </li>
                        <li>
                            <label>Imdb:</label><span>$movie_rate</span>
                        </li>
                        <li>
                            <label>Local:</label><span>$local_rating</span>
                        </li>
                    </ul>
                    
                    <div class='mrate'>
                    
                    <span class='mcount'> ($local_vote_count) votes</span>
                  </div>
                </div>
            </article>";
    }
}
function get_movies_by_genre($db, $genre_id)
{

    $query = "SELECT * FROM movie NATURAL JOIN genre_movie WHERE movie.movie_id = genre_movie.movie_id AND genre_movie.genre_id = $genre_id";
    $movie = mysqli_query($db, $query);
    if ($movie->num_rows <= 0) {
        echo "<h1>No post found</h1>";
    }
    printMovies($db,$movie);
}
