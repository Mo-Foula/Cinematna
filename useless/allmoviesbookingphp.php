<?php

require 'Connection.php';

function initializeData()
{
  $conn = connection();
    getMoviesFromParty($conn);
  $conn->close();
}
function getMoviesFromParty($conn){
    $query = "select distinct movie_id from party;";
    $movies_ids = mysqli_query($conn, $query);
  if ($movies_ids->num_rows > 0) {
    // output data of each row
    while ($row = $movies_ids->fetch_assoc()) {
         $movie_id = $row["movie_id"];
      $query = "SELECT * FROM `movie` WHERE movie_id = '$movie_id'";
      $movie_data = mysqli_query($conn, $query);
      if ($movie_data->num_rows > 0) {
        while ($row = $movie_data->fetch_assoc()) {
          $movie_name = $row["movie_name"];
          $movie_rate = $row["movie_rate"];
          $movie_poster = $row["movie_poster"];
          echo "<script>moviegrid('$movie_name','$movie_poster',$movie_rate);</script>";
        }
      } else {
        echo '0 movie data';
      }
    }
  }
}
