<?php

function connection()
{
  $servername = "localhost:3307";
  $username = "root";
  $password = "root";
  $db = "cinematna";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully<br>";
  return $conn;
}
function initializeData()
{
  $conn = connection();
  $id = $_GET["id"];
  getCinemtaFromDB($conn, $id);
  getMoviesInCinemaFromDB($conn, $id);
  getCinemaReviews($conn, $id);
  $conn->close();
}
function getCinemtaFromDB($conn, $id)
{
  // $conn = connection();

  $query = "SELECT * FROM `cinema` WHERE cinema_id = '$id'";
  $cinema_data = mysqli_query($conn, $query);
  if ($cinema_data->num_rows > 0) {
    // output data of each row
    while ($row = $cinema_data->fetch_assoc()) {
      $cinema_name = $row["cinema_name"];
      $cinema_address = $row["cinema_address"];

      $cinema_location = $row["cinema_location"];
      if ($cinema_location == "") {
        // if (is_null($cinema_location)){
        $cinema_location = $cinema_address;
      }
      //   echo "id: " . $row["id"]. " - Name: " . $row["cinema_name"]. " " . $row["cinema_address"]. "            ".$row["cinema_location"] ."<br>";
    }

    echo '<script type="text/javascript">',
      "document.getElementById('movie_name').innerHTML = '$cinema_name';
                     document.getElementById('cinema_location').innerHTML = '$cinema_location';
                     document.getElementById('poster_movie').src = 'images/$id.jpg';
                     document.getElementById('rate_movie').innerHTML = '8.5';",
      '</script>';
    // echo "var img = 'images/san.jpg';
    // document.getElementById('poster_movie').src = img;
    // var cinemaname = 'Cinema San Stefano';
    // document.getElementById('movie_name').innerHTML = cinemaname;
    // var cinemalocation = 'San Stefano Mall, Alexandria, Egypt';
    // document.getElementById('cinema_location').innerHTML = cinemalocation;
    // var cinemarating = 8.1;
    // document.getElementById('rate_movie').innerHTML = cinemarating;";
  } else {
    echo "0 results";
  }
  // $url = substr($url, 4);

}

function getMoviesInCinemaFromDB($conn, $id)
{
  // echo "<script>console.log('OKOKOKOKOK');</script>";
  //   $conn = connection();
  //   $id = $_GET["id"];
  $query = "SELECT * FROM `party` WHERE cinema_id = '$id'";
  $cinema_data = mysqli_query($conn, $query);
  if ($cinema_data->num_rows > 0) {
    // output data of each row
    while ($row = $cinema_data->fetch_assoc()) {
      $movie_id = $row["movie_id"];
      $query = "SELECT * FROM `movie` WHERE movie_id = '$movie_id'";
      $movie_data = mysqli_query($conn, $query);
      if ($movie_data->num_rows > 0) {
        while ($row = $movie_data->fetch_assoc()) {
          $movie_name = $row["movie_name"];
          $movie_rate = $row["movie_rate"];
          $movie_poster = $row["movie_poster"];
          // movieGrid(name, imgsrc, rating, movieLink, id)
          // id moviesinhere
          //TODO generate movie link
          echo "<script>document.getElementById('moviesinhere').innerHTML += movieGrid('$movie_name','$movie_poster',$movie_rate,'movieSinglePage.php?id=$movie_id',$movie_id);</script>";
        }
      } else {
        echo '0 movie data';
      }

      //   echo "id: " . $row["id"]. " - Name: " . $row["cinema_name"]. " " . $row["cinema_address"]. "            ".$row["cinema_location"] ."<br>";
    };
  } else {
    echo "0 movies in this cinema";
  }
}
function getCinemaReviews($conn, $id)
{
  $query = "SELECT * FROM `cinema_review` WHERE cinema_id = '$id'";
  $reviews = mysqli_query($conn, $query);
  $total_reviews = 0;
  if ($reviews->num_rows > 0) {
    // output data of each row
    while ($row = $reviews->fetch_assoc()) {
      $review_title = $row["review_title"];
      $review_comment = $row["review_comment"];
      $cinema_review_stars = $row["cinema_review_stars"];
      $user_id = $row["user_id"];
      $total_reviews += $cinema_review_stars;
      $query = "SELECT * FROM `user` WHERE user_id = '$user_id'";
      $movie_data = mysqli_query($conn, $query);
      if ($movie_data->num_rows > 0) {
        while ($row = $movie_data->fetch_assoc()) {
          $user_name = $row["user_name"];
        }
        $cinema_review_stars = (double) $cinema_review_stars;
        //generateReview(title, comment, user_name, date, rating) without date
        // echo "<script> console.log(generateReview($review_title,$review_comment,$user_name,$cinema_review_stars));</script>";
        echo "<script>document.getElementById('CinemaReviewsArea').innerHTML += generateReview('$review_title','$review_comment','$user_name',$cinema_review_stars)</script>";
      } else {
        echo '0 users with this id data';
      }

      //   echo "id: " . $row["id"]. " - Name: " . $row["cinema_name"]. " " . $row["cinema_address"]. "            ".$row["cinema_location"] ."<br>";
    }
    $total_reviews = $total_reviews/$reviews->num_rows;
    echo "<script>document.getElementById('rate_movie').innerHTML = '$total_reviews';</script>";
  } else {
    //TODO needs to be handled
    echo "0 ratings for this cinema";
  }
}
    // $url = $_SERVER['REQUEST_URI'];
    // print $url;
    // print "\n";
    // print $_GET["id"];
