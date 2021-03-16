<?php
class Movie
{
    public $movie_id;
    public $movie_name;
    public $movie_rate;
    public $coming_soon;
    public $movie_poster;
    public $movie_trailer;
    function __construct($movie_id, $movie_name, $movie_poster, $coming_soon, $movie_rate, $movie_trailer)
    {
        $this->movie_id = $movie_id;
        $this->movie_name = $movie_name;
        $this->movie_rate = $movie_rate;
        $this->coming_soon = $coming_soon;
        $this->movie_poster = $movie_poster;
        $this->movie_trailer = $movie_trailer;
    }
}
// function connect_to_db()
// {
//     $db = new mysqli("localhost:3307", "root", "root", "cinematna");
//     if ($db->connect_error) {
//         die("connection failed " . $db->connect_error);
//     }
//     return $db;
// }

function comparetosortbyrating($a, $b)
{
    return strcmp($b->movie_rate, $a->movie_rate);
}
require 'Connection.php';
function initialize()
{
    $conn = connection();
    setMoviesInSliderHomepage($conn);
    $movies_in_party = get_movies_from_party($conn);
    // echo $movies_in_party[0]->movie_name;
    set_popular_movies_inhomepage($movies_in_party);
    set_toprated_movies_inhomepage($movies_in_party);
    set_comingsoon_movies_inhomepage($conn);
    set_trailers_homepage($movies_in_party);
    $conn->close();
}
function set_trailers_homepage($movies)
{

    foreach ($movies as $movie) {
        $name = $movie->movie_name;
        $poster = $movie->movie_poster;
        $link = $movie->movie_trailer;
        echo "<script>generate_trailers_homepage('$link');
     generate_thumbnail('$name', '$poster');
     </script>";
    }
}
function set_popular_movies_inhomepage($movies)
{
    foreach ($movies as $movie) {

        $mid = $movie->movie_id;

        $mname = $movie->movie_name;
        $mrate = $movie->movie_rate;
        $mposter = $movie->movie_poster;

        echo "<script>generate_popular_movie('$mid','$mname','$mposter','$mrate')</script>";
    }
}
function set_comingsoon_movies_inhomepage($conn)
{
    // $mcoming = array();
    $query2 = "SELECT * FROM `movie` where coming_soon=1";

    $movie_data = mysqli_query($conn, $query2);
    if ($movie_data->num_rows > 0) {
        while ($row2 = $movie_data->fetch_assoc()) {
            // $mcomingsoon = new Movie($row2['movie_id'], $row2['movie_name'], $row2['movie_poster'], $row2['coming_soon'], $row2['movie_rate'], $row2['trailer']);
            // array_push($mcoming, $mcomingsoon);
            $mid = $row2['movie_id'];

            $mname = $row2['movie_name'];
            $mrate = $row2['movie_rate'];
            $mposter = $row2['movie_poster'];
            // return $mcoming;
            // echo "<script type='text/javascript>kokokookokoko();</script>";
            echo "<script>generate_commingsoon_movie('$mid','$mname','$mposter','$mrate')</script>";
        }
    }
    // $movie=new Movie($row['movie_id'],$row['movie_name'],$row['movie_poster'],$row['coming_soon'],$row['movie_rate']);
    // array_push($movies,$movie);



    // $mid = $mcomingsoon->movie_id;

    // $mname = $mcomingsoon->movie_name;
    // $mrate = $mcomingsoon->movie_rate;
    // $mposter = $mcomingsoon->movie_poster;
    // // return $mcoming;
    // echo "<script>generate_commingsoon_movie('$mid','$mname','$mposter','$mrate')</script>";
}
function set_toprated_movies_inhomepage($movies)
{
    usort($movies, "comparetosortbyrating");
    foreach ($movies as $movie) {
        //generate_toprated_movie(id,name,poster,rating){
        $mid = $movie->movie_id;

        $mname = $movie->movie_name;
        $mrate = $movie->movie_rate;
        $mposter = $movie->movie_poster;

        echo "<script>generate_toprated_movie('$mid','$mname','$mposter','$mrate')</script>";
    }
    // $query = "select distinct movie_id from party order by movie_rate desc";
    // $query2 = 'SELECT *
    //             FROM party
    //             INNER JOIN movie
    //             ON party.movie_id = movie.movie_id;';
    // $data = mysqli_query($conn, $query2);
    // if ($data->num_rows > 0) {
    //     while ($row = $data->fetch_assoc()) {
    //         $movie_id = $row['movie_id'];
    //         $movie_name = $row['movie_name'];
    //         $movie_rate = $row['movie_rate'];
    //         $movie_poster = $row['movie_poster'];
    //         echo "<script>generate_toprated_movie('$movie_id','$movie_name','$movie_poster','$movie_rate')</script>";
    //     }
    // }
}

function get_movies_from_party($conn)
{
    $query = "select distinct movie_id from party";
    $movies_ids = mysqli_query($conn, $query);
    $movies = array();
    //function __construct($movie_id,$movie_name,$movie_poster,$coming_soon,$movie_rate)
    if ($movies_ids->num_rows > 0) {
        while ($row = $movies_ids->fetch_assoc()) {
            $mid = $row['movie_id'];
            $query2 = "SELECT * FROM `movie` where movie_id=$mid";
            $movie_data = mysqli_query($conn, $query2);
            if ($movie_data->num_rows > 0) {
                while ($row2 = $movie_data->fetch_assoc()) {
                    $movie = new Movie($row2['movie_id'], $row2['movie_name'], $row2['movie_poster'], $row2['coming_soon'], $row2['movie_rate'], $row2['trailer']);
                    array_push($movies, $movie);
                }
            }
            // $movie=new Movie($row['movie_id'],$row['movie_name'],$row['movie_poster'],$row['coming_soon'],$row['movie_rate']);
            // array_push($movies,$movie);
        }
    }
    return $movies;
}

function setMoviesInSliderHomepage($conn)
{
    $query = "SELECT * FROM `movie` ";
    $cinema_data = mysqli_query($conn, $query);
    if ($cinema_data->num_rows > 0) {
        $i = 0;
        while ($row = $cinema_data->fetch_assoc()) {
            $movie_poster = $row['movie_poster'];
            $i++;
            if ($i > 5) {
                echo "<script>generate_carousel_cards('$movie_poster',true);</script>";
                // echo "<script>generate_carousel_cards('$movie_poster',true);</script>";
            } else {
                echo "<script>generate_carousel_cards('$movie_poster',false);</script>";
                // echo "<script>generate_carousel_cards('$movie_poster',false);</script>";
            }
        }
    }
}
