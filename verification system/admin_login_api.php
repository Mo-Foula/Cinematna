<?php
require '../Connection.php';

header("Access-Control-Allow-Origin: *");// access from every site where this api will be accessed by every site
// localhost or any domain or any subdomain
header("Content-type: application/json; charset=UTF-8");// recieve data in json
header("Access-Control-Allow-Methods: POST");// only accessible for post requests


$conn = connection();

if ($_SERVER['REQUEST_METHOD'] == "POST") // will execute only if the method is post
{
  $data = json_decode(file_get_contents("php://input")); // get all data from body of requested parameter ???
  if (!empty($data->user) && !empty($data->pass)) {
    $user = $data->user;
    $pass = $data->pass;
    $query = "SELECT * FROM admins where admin_id = $user AND admin_pass = $pass";
    $verification = mysqli_query($conn, $query);
    if ($verification->num_rows > 0) {
      $row = $verification->fetch_assoc();
      $cinema_id = $row['cinema_id'];
      
      $query = "SELECT * FROM cinema where cinema_id = $cinema_id ";
      $verification2 = mysqli_query($conn, $query);
      if($verification2->num_rows > 0) {
        $row2 = $verification2->fetch_assoc();
        http_response_code(200); // perfecc
        echo json_encode(array(
          "status" => 1,
          "message" => 'Logged in',
          "cinema_id" =>  $cinema_id,
          "admin_id" => $user,
          "cinema_name" => $row2["cinema_name"]
  
        ));
      }
      else{
        http_response_code(404); // perfecc
        echo json_encode(array(
          "status" => 1,
          "message" => 'Cinema not found'
  
        ));
      }
    } else {
      http_response_code(400); // service not available
      echo json_encode(array(
        "status" => 0,
        "message" => 'Wrong Input'
      ));
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


?>
