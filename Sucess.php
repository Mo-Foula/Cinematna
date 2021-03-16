<?php 
require 'checkLoggedIn.php';
session_start();
require "Connection.php";
?>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
    body {
      text-align: center;
      padding: 40px 0;
      background: #EBF0F5;
    }

    h1 {
      color: #88B04B;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-weight: 900;
      font-size: 40px;
      margin-bottom: 10px;
    }

    p {
      color: #404F5E;
      font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
      font-size: 20px;
      margin: 0;
    }

    i {
      color: #9ABC66;
      font-size: 100px;
      line-height: 200px;
      margin-left: -15px;
    }

    .card {
      background: white;
      padding: 60px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
      height: 850px;
      width: 400px;
    }

    h3 {
      color: rgb(65, 62, 62);
      position: relative;
      right: 110px;
    }

    .output {
      color: rgb(61, 60, 60);
      position: relative;
      bottom: 37px;
      right: 70px;
    }
  </style>

</head>

<body>

  <div class="card">
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
    <h1>Success</h1>
    <p>We received your purchase request</p><br>
    <div>

      <?php
      if (isset($_SESSION["rand_int"])){
      // $randInt = 10348;
      $conn = connection();
      $randInt = $_SESSION["rand_int"];
      $sql = "SELECT * FROM ticket WHERE randomInt=$randInt";
      $query = mysqli_query($conn, $sql);
      $letters = "";
      $userId = "";
      $username = "";
      $party_id = "";
      $movie_name = "";
      $date = "";
      if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
          $letters .= $row['seat_letter_index'] . " ";
          $userId = $row['user_id'];
          $party_id = $row['party_id'];
          $date = $row['ticket_day'];
        }
      }

      $sql = "SELECT * FROM user WHERE user_id=$userId";
      $query2 = mysqli_query($conn, $sql);
      while ($row2 = $query2->fetch_assoc()) {
        $username = $row2['user_name'];
      }

      $sql2 = "SELECT * FROM party WHERE party_id=$party_id";
      $query2 = mysqli_query($conn, $sql2);
      while ($row2 = $query2->fetch_assoc()) {
        $movie_id = $row2['movie_id'];

        $sql3 = "SELECT * FROM movie WHERE movie_id=$movie_id";
        $query3 = mysqli_query($conn, $sql3);
        $row3 = $query3->fetch_assoc();
        $movie_name = $row3['movie_name'];
      }
    }


      ?>
      <h3>Name:</h3> <output id="name" class="output"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo  $username ?></output>
      <h3>Seats:</h3> <output class="output" id="Seats">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $letters ?></output>
      <h3>Movie:</h3> <output class="output" id="moviename">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $movie_name; ?></output>
      <h3>Date:</h3> <output class="output" id="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date; ?></output>
      <!-- <script>
           <code>jQuery(document).ready(function(){ callQR();}); function callQR(){ var url=document.URL; url=encodeURI(url); var fullUrl="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl="+url; jQuery("#QR").attr("src",fullUrl); }
    </script> -->


      <br>
      <center><img src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo $randInt ?>" width="50%" /></center>
    </div>
  </div>
</body>

</html>