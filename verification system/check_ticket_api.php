<?php
require '../Connection.php';

header("Access-Control-Allow-Origin: *");// access from every site where this api will be accessed by every site
// // localhost or any domain or any subdomain
header("Content-type: application/json; charset=UTF-8");// recieve data in json
header("Access-Control-Allow-Methods: POST");// only accessible for post requests




if ($_SERVER['REQUEST_METHOD'] == "POST") // will execute only if the method is post
{
    $conn = connection();
    $data = json_decode(file_get_contents("php://input")); // get all data from body of requested parameter ???
    if (!empty($data->num)) {
        $num = $data->num;
        $query = "SELECT * FROM ticket where randomInt=$num";
        $ticket_data = mysqli_query($conn, $query);
        $seats_letters = array();
        $party_start = "0";
        $booking_name ="0" ;
        $party_date ="0" ;
        if ($ticket_data->num_rows > 0) {
            while ($row = $ticket_data->fetch_assoc()) {
                $party_date = date("Y-m-d",strtotime($row['ticket_day']));
                // echo $row['seat_letter_index']."<br>";
                array_push($seats_letters, $row['seat_letter_index']);
                $pid = $row['party_id'];
                if(count($seats_letters) == 1){
                    $query = "SELECT * FROM party where party_id=$pid";
                $p_Data = mysqli_query($conn, $query);
                if ($p_Data->num_rows > 0) {
                    while ($row2 = $p_Data->fetch_assoc()) {
                        // echo $row2['party_start']."<br>";
                        $party_start = $row2['party_start'];
                        $user_id = $row['user_id'];
                        $query3 = "SELECT * FROM user where user_id=$user_id";
                        $user_data = mysqli_query($conn, $query3);
                        if ($user_data->num_rows > 0) {
                            while ($row3 = $user_data->fetch_assoc()) {
                                // echo $row3['user_name']."<br>";
                                // array_push($names, $row3['user_name']);
                                $booking_name = $row3['user_name'];
                            }
                        }

                        // print_r($row2);
                        // echo '<br>';
                        // echo '<br>';
                    }
                }
                }
            }
            http_response_code(200); // internal server error
            echo json_encode(array(
                "status" => 1,
                "message" => 'found',
                "seats_letters" =>  $seats_letters,
                "party_start" => $party_start ,
                "booking_name" => $booking_name,
                "party_date" => $party_date

            ));
            //found
        } else {
            http_response_code(404); // internal server error
            echo json_encode(array(
                "status" => 0,
                "message" => 'ticket not found'
            ));
            //not found
        }
    } else {
        http_response_code(404); // internal server error
        echo json_encode(array(
            "status" => 0,
            "message" => 'All values needed'
        ));
    }
    // print_r($data); 
    // die;

} else {
    http_response_code(503); // service not available
    echo json_encode(array(
        "status" => 0,
        "message" => 'Access Denied'
    ));
}
