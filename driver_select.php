<?php

session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
$driver_id = $_POST['selected_driver'];
$ride_id = $_SESSION['ride_id'];
$fare = $_SESSION['fare'];
$time = $_SESSION['time'];

$sql = "UPDATE ride_table SET driver_id = $driver_id WHERE ride_id = $ride_id";
mysqli_query($con, $sql);
$tra = "insert into transactions_table(ride_id, transaction_time, amount_paid) values ('$ride_id', '$time', '$fare')";
mysqli_query($con, $tra);
header('location: review.php');


?>