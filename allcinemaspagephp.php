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
   getMoviesFromParty($conn);
  $conn->close();
}
function getMoviesFromParty($conn){
    
      $query = "SELECT * FROM `cinema`";
      $cinema_data = mysqli_query($conn, $query);
      if ($cinema_data->num_rows > 0) {
        while ($row = $cinema_data->fetch_assoc()) {
          $cinema_name = $row["cinema_name"];
          $cinema_id = $row["cinema_id"];

          echo "<script>cinemagrid('$cinema_name','images/$cinema_id.jpg','$cinema_id');</script>";
          //cinemagrid(cinema_name,poster_movie,m_id)
        }
      } else {
        echo '0 movie data';
      }
    }
  