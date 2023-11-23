<?php
ession_start();
$con = mysqli_connect('127.0s.0.1','root','');
mysqli_select_db($con, 'taxi_service');
        if ($conn-> connect_error) {
            die("Connection Failed:". $conn-> connect_error);
        }