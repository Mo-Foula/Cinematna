<?php
    session_start();
    if(!isset($_SESSION['logged_in_admin_id'])){
        header('Location: adminticketverificationlogin.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="adminticketverification.php" method="post">
        <p>Enter number</p>
        <input type="text" name="ticket_number" id="">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST['ticket_number'])) {
    $num = $_POST['ticket_number'];
    $conn = connection();
    $query = "SELECT * FROM ticket where randomInt=$num";
    $ticket_data = mysqli_query($conn, $query);
    if ($ticket_data->num_rows > 0) {
        while ($row = $ticket_data->fetch_assoc()) {
            echo $row['seat_letter_index']."<br>";
            $pid = $row['party_id'];
            $query = "SELECT * FROM party where party_id=$pid";
            $p_Data = mysqli_query($conn, $query);
            if ($p_Data->num_rows > 0){
                while ($row2 = $p_Data->fetch_assoc()) {
                    echo $row2['party_start']."<br>";
                    $user_id = $row['user_id'];
                    $query3 = "SELECT * FROM user where user_id=$user_id";
                    $user_data = mysqli_query($conn, $query3);
                    if ($user_data->num_rows > 0) {
                        while ($row3 = $user_data->fetch_assoc()){
                            echo $row3['user_name']."<br>";
                        }
                    }

                    print_r($row2);
                    echo '<br>';
                    echo '<br>';
                }
                
            }
        }
    }
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

?>