<?php

session_start();
$con = mysqli_connect('127.0.0.1','root','');
mysqli_select_db($con, 'taxi_service');
?>
<DOCTYPE="html">
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Review page</title>
</head>
<body>
    <div class="login-container">
        <form action="login_process.php" method="post">
            <h2>Your Ride has been booked successfully</h2>
            <h1>Leave a review</h1>
            <label for="rating">Rating</label>
            <input type="text" id="rating" name="rating" required>
            <label for="comment">comment</label>
            <input type="text" id="comment" name="comment" required>

            <button type="submit">Submit Review</button>
        </form>
    </div>
</body>
</html>



