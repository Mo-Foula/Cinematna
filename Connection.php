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
?>