
<?php
function generateRandomValue() {
    return rand(10, 50);
}
// Assuming your form is submitted using POST method
session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
    $s_location = $_POST['s_location'];
    $e_location = $_POST['e_location'];
    $date = $_POST['date'];
    $time = $_POST['time'];

     if (isset($_SESSION['customer_id'])) {
     
        $customerid = $_SESSION['customer_id'];
    }
    $fare = generateRandomValue();

    $sql = "INSERT INTO ride_table(customer_id, start_location, end_location, start_time, ride_date, fare) VALUES ('$customerid', '$s_location', '$e_location', '$time', '$date','$fare')";
    $run = mysqli_query($con,$sql);
    $lastRideId = mysqli_insert_id($con);
    $_SESSION['ride_id']=$lastRideId;
   if ($run) {
        $lastRideId = mysqli_insert_id($con);
        $_SESSION['ride_id'] = $lastRideId;
        $_SESSION['fare'] = $fare;
        $_SESSION['time'] = $time;
        header('location: driver.php');
    } else {
        echo "Error: " . mysqli_error($con);
    }
    

?>
