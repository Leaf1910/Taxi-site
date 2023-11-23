<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
$ID = $_POST['ID'];
$password = $_POST['password'];
$s = "select * from customers_table where customer_id = '$ID' && customer_password = '$password'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);   
if ($num == 1) {
    // Fetch the customer_id from the result set
    $row = mysqli_fetch_assoc($result);
    $customer_id = $row['customer_id'];

    // Set the session variable
    $_SESSION['customer_id'] = $customer_id;

    // Redirect to the index page
    header('location: index_login.php');
    exit();
} else {
    $string = "Try again";
    echo $string;
}

?>

