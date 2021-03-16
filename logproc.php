<?php
session_start();
// require "dbcon.php";
$mail=$_POST["email"];
$pass=$_POST["password"];

if(isset($_SESSION['id']))  header("location: profil.php" );
$query="select * from login where email= '$mail' and password= '$pass'  ";
$res=mysqli_query($con, $query);
if(mysqli_num_rows($res)>=1)
{   

    echo '<script> alert("you are a validated user. logged in successfully") </script>';

    while($rows = mysqli_fetch_array($res)){
    
    $_SESSION['id']= $rows["id"];
        echo $rows["id"];
    }
    header("location: profil.php" );
}
else
{
    echo '<script> alert("Invalid username/password") </script>';
    // require "login.html";

}
mysqli_close($con);
?>