<?php
session_start();
if(isset($_SESSION['logged_in_admin_id'])){
    header('Location: adminticketverification.php');
}
if (isset($_POST['submit'])){
    verify_login(connection());
}
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

function verify_login($conn){
    $user = $_POST["admin_id"];
    $pass = $_POST["admin_pass"];
    $query = "SELECT * FROM admins where admin_id = $user AND admin_pass = $pass";
    $verification = mysqli_query($conn, $query);
    if ($verification->num_rows > 0){
        while ($row = $verification->fetch_assoc()){
            //Login
            $_SESSION['logged_in_admin_id'] = $row['admin_id'];
            $_SESSION['logged_in_admin_cinema'] = $row['admin_pass'];
            header('Location: adminticketverification.php');
        }   
    }
    else{
        echo '';
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <form method="post" action="adminticketverificationlogin.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Admin ID</label>
    <input type="text" name="admin_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="admin_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>