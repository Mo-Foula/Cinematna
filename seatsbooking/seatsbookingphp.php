<?php

session_start();
if (isset($_GET['seats'])) {
    $arrayofseats = explode(',', $_GET['seats']);
    insertTicket($arrayofseats);
    header("Location: temp.php");
}

function insertTicket($arrayofseats)
{
    $loggedInUser = $_SESSION['user_id'];
    $date = $_GET['date'];
    $party_id = $_GET['party_id'];
    $conn = connection();
    $rand = rand(100, 1000000);
    $_SESSION['rand_int'] =$rand;
    foreach ($arrayofseats as $seat) {
        do {
            $baselink = "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=" . $rand;
            $sql = "INSERT INTO `ticket`(`ticket_id`, `user_id`, `party_id`, `seat_letter_index`, `seat_id`, `qr`, `randomInt`,`ticket_day`) VALUES (NULL,$loggedInUser,$party_id,'$seat',1,'$baselink',$rand,'$date')";
            // $sql = "INSERT INTO `ticket`(`ticket_id`, `user_id`, `party_id`, `seat_letter_index`, `seat_id`, `qr`, `randomInt`) VALUES (NULL,1,1,'$seat',1,'$baselink',$rand )";
            mysqli_query($conn, $sql);
            echo mysqli_error($conn);
        } while (mysqli_error($conn));
    }
    $conn->close();
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

function initializeData()
{
    $conn = connection();
    $party_data = getDataFromDb($conn);
    setUpSeats($conn, $party_data['hall_id']);
    checkTickes($conn);
    $conn->close();
}


function getDataFromDb($conn)
{
    if (isset($_GET['party_id'])) {
        $party_id = $_GET['party_id'];
        $query = "SELECT * FROM party WHERE party_id = $party_id";
        $party_data = mysqli_query($conn, $query);
        if ($party_data->num_rows > 0) {
            while ($row = $party_data->fetch_assoc()) {
                return $row;
            }
        }
    }
}
function setUpSeats($conn, $hall_id)
{
?>
    <script type="text/javascript">
        var arr = [];
        var arrso8yra = [];
        var prev = -1;
    </script>

    <?php
    $query = "SELECT * FROM seat WHERE hall_id = $hall_id";
    $seats = mysqli_query($conn, $query);

    if ($seats->num_rows > 0) {
        while ($row = $seats->fetch_assoc()) {
    ?>
            <script type="text/javascript">
                var roooooow = <?php echo $row['row_id'] ?>;
                var seatval = <?php echo $row['seat_value'] ?>;
                if (prev == -1) {
                    prev = roooooow;
                } else if (prev != roooooow) {
                    prev = roooooow;
                    arr.push(arrso8yra);
                    arrso8yra = [];
                }

                arrso8yra.push(seatval);
            </script>

        <?php
        }
        //generaterowshereplease
        ?>
        <script>
            // console.log(arr);
            // generate_seats(arr);
            // let A = document.getElementById('generaterowshereplease').appendChild( generate_seats(arr));
            // document.getElementById("generaterowshereplease").innerHTML += generate_seats(arr);
        </script>
<?php
        function checkTickes($conn)
        {
            $party_id = $_GET['party_id'];
            $ticket_day = $_GET['date'];
            echo $ticket_day;
            $sql = "SELECT * FROM ticket WHERE party_id=$party_id AND ticket_day = \"$ticket_day\"";
            $tickesData = mysqli_query($conn, $sql);
            while ($row = $tickesData->fetch_assoc()) {
                $letter_index = $row['seat_letter_index'];
                $temp = ord($letter_index);
                $columnindex = intval(substr($letter_index, 1, 2)) - 1;
                $rowindex = $temp - ord('A');
                // echo "<script> arr[$rowindex][$columnindex] = -1; </script>";
                echo "<script> 
            x = newRow(arr,$rowindex);
            y = newCol(arr,$columnindex);
            console.log($rowindex+','+$columnindex +' to '+ x+','+y+'\\n')
                arr[x][y] = -1; </script>";
            }
            echo "<script>generate_seats(arr);</script>";
        }


        // function checkTickes($conn)
        // {
        //     $party_id = $_GET['party_id'];
        //     $sql = "SELECT * FROM ticket WHERE party_id=$party_id";
        //     $tickesData = mysqli_query($conn, $sql);
        //     while ($row = $tickesData->fetch_assoc()) {
        //         $letter_index = $row['seat_letter_index'];
        //         $temp = ord($letter_index);
        //         $columnindex = intval(substr($letter_index, 1, 2)) - 1;
        //         $rowindex = $temp - ord('A');
        //         echo "<script> arr[$rowindex][$columnindex] = -1; </script>";
        //     }
        //     echo "<script>generate_seats(arr);</script>";
        // }
        // echo '<script> console.log(arr); document.getElementById("generaterowshereplease").innerHTML+=generate_seats(arr);  </script>';

    }
    /*
 let seats = [
                    [-1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1],
                    [0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0],
                    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1],
                    [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0],
                    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0],

                    // b column fl a5r
                    // [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0],
                    // [0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 0, 0],
                    // [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    // [1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0],
                    // [1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 0, 0],

                    //12
                ];

                generate_seats(seats);
 */
}


//TODO matensash tgahez el id bta3 el seat mn A1 le arqam row * num)
?>