<?php
session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
$ID = $_POST['id'];
$Name = $_POST['name'];
$Password = $_POST['password'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$reg = "insert into customers_table(customer_id, customer_name, customer_phone, customer_emaill, customer_password) values ('$ID','$Name','$Phone','$Email','$Password')";
mysqli_query($con, $reg);
header('location:login.php');
?>