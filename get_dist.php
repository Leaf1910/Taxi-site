<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root', '');
mysqli_select_db($con, 'taxi_service');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startLocation = $_POST["s_location"];
    $endLocation = $_POST["e_location"];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    $_SESSION['s_location'] = $startLocation;
    $_SESSION['e_location'] = $endLocation;

    $apiKey = 'AIzaSyC2fq_TJxuakE2fJ-pHMWOndD0tbT9xgyM';

    $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=$startLocation&destinations=$endLocation&key=$apiKey";

    $response = file_get_contents($url);

    if ($response === FALSE) {
        echo "Error: Unable to fetch response from the API.";
    } else {
        $data = json_decode($response);

        if ($data->status == "OK") {
            $distance = $data->rows[0]->elements[0]->distance->text;
            $fare = $distance; 
            $numericDistance = filter_var($distance, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $_SESSION['fare'] = $numericDistance;
            header('location: ride_request.php');
        } else {
            echo "API Error: " . $data->status;
        }
    }
}
?>
