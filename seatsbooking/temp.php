<?php
require '../checkLoggedIn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <input type="submit" value="Success" onclick="success()">
    <input type="submit" value="Failed" onclick="failed()">

    <script>
        function success() {
            window.location.replace('../Sucess.php')
        }

        function failed() {
            window.location.replace('../Error.html')
        }
    </script>
</body>

</html>