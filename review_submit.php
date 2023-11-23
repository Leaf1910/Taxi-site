<?php

session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
$rating = $_POST['rating'];
$comment = $_POST['comment'];
$ride_id = $_SESSION['ride_id'];
$sql = "INSERT INTO reviews_table(ride_id, rating, comment) VALUES ('$ride_id', '$rating', '$comment')";
$run = mysqli_query($con,$sql);
if($run){
    header('location: index.php');
}else {
    echo "Error: " . mysqli_error($con);
}

?>