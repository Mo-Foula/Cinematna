<?php

require 'Connection.php';

function initializeData()
{
  $conn = connection();
  $id = $_GET["id"];
   getMovieFromDB($conn, $id);        //fel id 2 fih moshkela
   getActorsFromDB($conn, $id);    
   getGenderFromDB($conn, $id);   
  $conn->close();
}

function getMovieFromDB($conn, $id){

$query = "SELECT * FROM `movie` WHERE movie_id = '$id'";

$movie_data = mysqli_query($conn, $query);
  if ($movie_data->num_rows > 0) {
    // output data of each row
    while ($row = $movie_data->fetch_assoc()) {
      $movie_name = $row["movie_name"];
      $movie_des = $row["movie_des"];
      $movie_release_date =$row["release_date"]; //fish moshkela
      $movie_rate = $row["movie_rate"];
      $movie_poster = $row["movie_poster"];
      $movie_3d=$row["movie_3d"]; 
      $movie_foreign=$row["movie_foreign"]; 
      $run_time=$row["run_time"]; 
      $movie_trailer=$row["trailer"];

      echo "<script> setMovieName('$movie_name','$movie_release_date','$movie_rate','$movie_poster',`$movie_des`,'$run_time','$movie_trailer',$id) </script>";
      //function setMovieName(MovieName,year,rate,poster,description,runTime,MovieTrailer) {   
        // echo "document.getElementById('linkonmodal').href = \"modalpage.php?id=$id\";";  

      echo "<script> document.getElementById('trailer_movie_mine').href = \"$movie_trailer\";</script>";

        // echo "<script> setMovieName('$movie_name','$movie_release_date','$movie_rate','$movie_poster','$movie_des','$run_time')  </script> ";

        
         //setMovieName(MovieName,year,rate,poster,description,runTime)
    }
}
else{

 echo "0 results";

}

}
function getActorsFromDB($conn, $id) //actor mocvie
{
$query = "SELECT * FROM `actor_movie` WHERE movie_id = '$id'";
$actor_movie_data = mysqli_query($conn, $query);
    
      if ($actor_movie_data->num_rows > 0) {
        while ($row = $actor_movie_data->fetch_assoc()) {
          $actor_id=$row["actor_id"]; 
          $query2 = "SELECT * FROM `actor` WHERE actor_id = '$actor_id'";
          //mysqli
          $actor_id=mysqli_query($conn, $query2);
          //if w while 
          if ($actor_id->num_rows > 0) {
            while ($row = $actor_id->fetch_assoc()) {
              
              $actor_name=$row["actor_name"];
            }
           
          }
           else{echo '0 data';}
      }
     echo "<script> setActors('$actor_name') </script> ";
      
      } else {
        echo '0 actor data';
      }

      

    } //;




function getGenderFromDB($conn, $id){ //zai el actors 

$query = "SELECT * FROM `genre_movie` WHERE movie_id = '$id'";

$genre_movie_data = mysqli_query($conn, $query);

if ($genre_movie_data->num_rows>0) {
  
  while ($row=$genre_movie_data->fetch_assoc()) {
   $genre_id=$row["genre_id"];
   $query1 = "SELECT * FROM `genre` WHERE genre_id = '$genre_id'";
   $genre_data=mysqli_query($conn, $query1);
if($genre_data->num_rows>0){
  while ($row=$genre_data->fetch_assoc()) {
  $genre_name=$row["genre_name"];



}
echo "<script> setGenres('$genre_name') </script>";
}
else{
        echo '0 data for genres';

  }
}
}


}




?>