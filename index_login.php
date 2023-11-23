
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.min.css">
</head>
<body>
    <div class="main-container">
        <div class="background-text">
        <h2>book a <span>cab now</span></h2>
        </div>
        <header class="header">
            <a href="#" id="logo"><img src="images/CabHUB.png" alt=""></a>
            <nav class="navbar">
            <?php
                session_start();
                $con = mysqli_connect('127.0.0.1','root','');
                mysqli_select_db($con, 'taxi_service');
                if (isset($_SESSION['customer_id'])) {
                    // Get the customer's name from the session
                    $customerid = $_SESSION['customer_id'];
                
                    // Query to get the customer's name
                    $n = "SELECT customer_name FROM customers_table WHERE customer_id='$customerid'";
                    $nameResult = mysqli_query($con, $n);
                
                    if ($nameResult) {
                        // Fetch the result as an associative array
                        $row = mysqli_fetch_assoc($nameResult);
                
                        // Get the customer name
                        $customerName = $row['customer_name'];
                
                        // Display a welcome message
                        echo '<span class="welcome-message">Welcome, <span class="user-name">' . $customerName . '</span>!</span>';
                    } else {
                        // Handle the error if the query fails
                        echo 'Error: ' . mysqli_error($con);
                    }
                }
                ?>
                <a href="index.php">Log Out</a>
                
            </nav>
            <a href="#" id="menu-bars" class="fas fa-bars"></a>
        </header>
        <div class="taxi-image">
            <img src="images/carmain.png" alt="">
        </div>
    </div>

<!-- home section -->
<div class="home-container">
    <div class="home-content">
        <div class="inner-content">
            <h3>best in city</h3>
            <h2>trusted cab sservice in county</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil deserunt odio repellendus dolorum suscipit excepturi placeat facilis dignissimos officiis aut nam, delectus possimus rerum consequatur similique! Deserunt, vitae. Officiis?</p>
            <a href="#" class="review">Leave a review</a>
        </div>
        <div class="inner-content">
           <div class="contact-form">
               <div class="form-heading">
                   <h1>book a cab</h1>
               </div>
               <form action="ride_request.php" method="post">
               <div class="form-fields">
                <input type="text" name="s_location" placeholder="Start location" required>
                <input type="text" name="e_location" placeholder="End location" required>
                <input type="date" name="date" placeholder="date" required>
                <input type="time" name="time" placeholder="start time" required>
               </div>
               <div class="submit">
               <button type="submit">Submit</button>
               </div>
              
           </div>
           
        </div>
    </div>
</div>
<!-- home section ended -->

<!-- our tariff -->

<div class="main-tariff">
    <h1>our <span>tarrif</span></h1>
    <div class="inner-tarrif">
        <div class="tarrif-container">
            <div class="inner-box">
                <img src="images/image1.png" alt="">
                <h2>economy class</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3>price: $3 /-</h3>
                <a href="#">order now</a>
            </div>
        </div>

        <div class="tarrif-container">
            <div class="inner-box">
                <img src="images/image1.png" alt="">
                <h2 class="heading-yellow">economy class</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3 class="yellw-section">price: $3 /-</h3>
                <a href="#" class="btn-yellow">order now</a>
            </div>
        </div>

        <div class="tarrif-container">
            <div class="inner-box">
                <img src="images/image1.png" alt="">
                <h2>economy class</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat illum officia fugiat, autem facere iste repellendus omnis nemo dolore</p>
                <h3>price: $3 /-</h3>
                <a href="#">order now</a>
            </div>
        </div>
    </div>
</div>


<!-- our tariff ended -->

<!-- fast booking -->
<div class="fast-booking">
    <h1 class="fast-hading">we do best</h1>
    <h2>than you wish</h2>
    <div class="inner-fast">
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>fast booking</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
                
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>fast booking</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>fast booking</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>fast booking</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
    </div>
</div>




<!-- fast booking end -->



<div class="testimonials">
    <h1 class="heading-test">happy clients</h1>
    <div class="main-testimonials">
        <div class="inner-test">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis fugit magnam esse, amet adipisci eaque dolore explicabo quidem laudantium ad, enim, obcaecati optio? Harum porro delectus accusamus assumenda ullam.</p>
            <div class="clients">
                <img src="images/jhon.png" alt="">
                <h1>jhone doe</h1>
            </div>
        </div>
        <div class="inner-test">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis fugit magnam esse, amet adipisci eaque dolore explicabo quidem laudantium ad, enim, obcaecati optio? Harum porro delectus accusamus assumenda ullam.</p>
            <div class="clients">
                <img src="images/jhon.png" alt="">
                <h1>jhone doe</h1>
            </div>
        </div>
    </div>
</div>


    <script src="script.js"></script>
</body>
</html>
