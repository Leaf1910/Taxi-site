<?php

session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
$d = "SELECT driver_id, driver_name, car_model FROM driver_table";
$result = mysqli_query($con,$d);
$fare = $_SESSION['fare'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Driver</title>
    <link rel="stylesheet" href="test2.css">
</head>
<body>
    <div class="driver-selection-container">
        <h1>Select a Driver</h1>
        <h1 id="fare">Fare: $<?php echo $fare?></h1>
        <form action="driver_select.php" method="post">
            <?php
            
            while ($row = $result->fetch_assoc()) {
                ?>
                
                <label class="custom-radio">
                    <input type="radio" name="selected_driver" value="<?php echo $row['driver_id'];?>">
                    <div id="driver_info">
    <br>
    <?php 
        echo '<strong>Driver Name:</strong> ' . $row['driver_name'] . '<br>';
        echo '<strong>Car Model:</strong> ' . $row['car_model'];
    ?>
</div>
                </label><br>
            
                <?php
            }
            ?>
            <button type="submit">Submit Selection</button>
        </form>
    </div>
</body>
</html>
