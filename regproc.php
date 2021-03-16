<?php

// require "dbcon.php";
session_start();
if(isset($_POST['signupsubmitbutton'])){
signup();
}

function signup(){
    // 
    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'cinematna');
    $uname= $_POST["username"];
$mail= $_POST["email"];
$pass= $_POST["password"];
$repass= $_POST["repassword"];
if($uname=="" || $pass=="" || $repass==""|| $mail=="")
{
    echo '<script> alert("Empty Feild") </script>';
    // require "login.html";
}
else if($pass!=$repass)
{
    echo'<script>document.getElementbyid["wrongrepass"].innerHtml="password doesnt match";
    document.getElementbyid["wrongrepass"].style.visibility="visible";
    </script>';
    // echo '<script> alert("password doesnt match") </script>';
    // require "login.html";
}
else if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
{
    echo '<script> alert("Invaild email") </script>';
    // require "login.html";
}
else{
   
$sql="select * from user where user_name= '$uname'";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($res)>=1)
{
    echo '<script> alert("username already taken") </script>';
    // require "login.html";
}
else
{
   $output= mysqli_query($con,"insert into user (user_id,user_name, user_email, user_password) values ('','$uname', '$mail' ,'$pass')")or die(mysqli_error($con));
    echo '<script> alert("reg. success") </script>';
    // require "login.html";


}
}
mysqli_close($con);
}
?>