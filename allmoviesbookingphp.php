<?php
require 'Connection.php';
function initializeData()
{
  $conn = connection();
    getMoviesFromParty($conn);
  $conn->close();
    
}

function initializeData2()
{
  $conn = connection();
    $id = $_GET['id'];
    getPartiesFromMovie($conn, $id);
    GenerateMoviesFromParty($conn, $id);
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
          $overview_movie = $row["movie_des"];
          echo "<script>moviegrid('$movie_name','$movie_poster',$movie_rate,'$movie_id');</script>";
        }
      } else {
        echo '0 movie data';
      }
    }
  }
}

function getPartiesFromMovie($conn, $id){
 $query = "SELECT * FROM `party` WHERE movie_id = '$id'";  
    $parties_ids = mysqli_query($conn, $query);
    if ($parties_ids->num_rows > 0) {
        while ($row = $parties_ids->fetch_assoc()) {
            
         $party_id = $row["party_id"];
        $party_start = $row["party_start"];
            $party_price = $row["party_price"];
            $cinema_id = $row["cinema_id"];
        $query2 = " SELECT * FROM `cinema` WHERE cinema_id ='$cinema_id'";
            $cinema_id = mysqli_query($conn, $query2);
    if ($cinema_id->num_rows > 0) {
        while ($row2 = $cinema_id->fetch_assoc()) {
            $cinema_name = $row2["cinema_name"];
        echo "<script>movieTicketsPage('$id','$party_id',\"$cinema_name  $party_start  $party_price\")</script>";
        }
    }
            
}
    }
}
function GenerateMoviesFromParty($conn,$id){
$query = "SELECT * FROM `movie` WHERE movie_id = '$id'";
      $movie_data = mysqli_query($conn, $query);
      if ($movie_data->num_rows > 0) {
        while ($row = $movie_data->fetch_assoc()) {
          $movie_name = $row["movie_name"];
          $movie_poster = $row["movie_poster"];
          $overview_movie = $row["movie_des"];
         echo "<script>setMovie('$movie_name','$movie_poster', `$overview_movie`);</script>";
        }
      } else {
        echo '0 movie data';
      }
    }