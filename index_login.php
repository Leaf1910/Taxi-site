
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
                    
                    $customerid = $_SESSION['customer_id'];
                
                 
                    $n = "SELECT customer_name FROM customers_table WHERE customer_id='$customerid'";
                    $nameResult = mysqli_query($con, $n);
                
                    if ($nameResult) {
                        
                        $row = mysqli_fetch_assoc($nameResult);
                
                       
                        $customerName = $row['customer_name'];
                        
                        echo '<a><span class="welcome-message">Welcome, <span class="user-name">' . $customerName . '</span>!</span></a>';
                    } else {
                       
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

<div class="home-container">
    <div class="home-content">
        <div class="inner-content">
            <h3>Best in City</h3>
            <h2>Trusted cab Service in County 1KM = $1</h2>

        </div>
        <div class="inner-content">
           <div class="contact-form">
               <div class="form-heading">
                   <h1>book a cab</h1>
               </div>
               <form action="get_dist.php" method="post">
               <div class="form-fields">
                <input type="text" name="s_location" placeholder="Start location" required>
                <input type="text" name="e_location" placeholder="End location" required>
                <input type="date" name="date" placeholder="date" required>
                <input type="time" name="time" placeholder="start time" required>
               </div>
               <div class="submit">
                <div id="button">
               <button type="submit">Submit</button>
            </div>
               </div>
              
           </div>
           
        </div>
    </div>
</div>


<div class="main-tariff">
        <h1>
            MORE WAYS TO RIDE WITH US
            
        </h1>
        <div class="inner-tarrif">
            <div class="tarrif-container">
                <div class="inner-box">
                    <img src="https://becktaxi.com/cdn/shop/t/6/assets/beck-chits_.png?v=84708642258601155431613419179" alt="">
                    <h2>CABHUB BUCKS</h2>
                    <p>
                        Think about Cabhub Bucks as a distinctive present idea! They're a fantastic method to enjoy riding in freedom with Cabhub. They make excellent gifts for employees, Christmas stuffers, and handy backups at home!

                    </p>


                </div>
            </div>

            <div class="tarrif-container">
                <div class="inner-box">
                    <img src="https://becktaxi.com/cdn/shop/t/6/assets/beck-events_.png?v=181923313640530627661613419180" alt="">
                    <h2 class="heading-yellow">
                        Special Events
                    </h2>
                    <p>
                        If you are planning an event, large or small, we can help with all your transportation requirements. We can work with you to create a custom experience for your guests to arrive and get home safe.

                    </p>
                    <h3 class="yellw-section"> </h3>

                </div>
            </div>

            <div class="tarrif-container">
                <div class="inner-box">
                    <img src="https://becktaxi.com/cdn/shop/t/6/assets/beck-accounts_.png?v=18679035097341112701613419179" alt="">
                    <h2>
                        Accounts
                    </h2>
                    <p>
                        Create a CabHub monthly charge account to fit your travel needs.

                    </p>
                    <h3> </h3>

                </div>
            </div>
        </div>
    </div>


  
    <div class="fast-booking">
        <h1 class="fast-hading">we do best</h1>
        <h2>than you wish</h2>
        <div class="inner-fast">
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-star"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Automated Fare Calculation</h1>
                    <p>Implement a reliable fare calculation system based on factors such as distance, time, and any additional charges. Provide fare estimates before confirming the booking</p>

                </div>

            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Real time tracking</h1>
                    <p>
                        Implement real-time tracking of the booked taxi. Passengers should be able to track the location of the approaching vehicle, providing transparency and reducing anxiety about arrival times.
                    </p>

                </div>
            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Secure Payment Options</h1>
                    <p>Offer secure and convenient payment options. Support various payment methods, including credit/debit cards, mobile wallets, and in-app payments</p>

                </div>
            </div>
            <div class="booking-content">
                <div class="icon-fast">
                    <span><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="inner-fast-text">
                    <h1>Rating and Reviews</h1>
                    <p>
                        Allow passengers to rate and review drivers, and vice versa. This helps maintain service quality and builds trust within the community.
                    </p>

                </div>
            </div>
        </div>
    </div>








    <div class="testimonials">
        <h1 class="heading-test">happy clients</h1>
        <div class="main-testimonials">
            <div class="inner-test">
                <p>
                    "Wow, I can't say enough good things about this taxi service! The drivers are consistently friendly and punctual. I've used their service multiple times, and each experience has been fantastic. The cars are always clean and comfortable, making my rides enjoyable. Booking is a breeze, and the customer service is top-notch. I highly recommend this taxi service to anyone looking for a reliable and pleasant transportation experience!"
                    .
                </p>
                <div class="clients">
                    <img src="images/jhon.png" alt="images/jhon" width="150" height="200">
                    <h1>jhone doe</h1>
                </div>
            </div>
            <div class="inner-test">
                <p>
                    "I am beyond impressed with the exceptional service provided by this taxi company. The drivers are not only skilled and efficient but also incredibly courteous. I've never encountered a more reliable transportation service. The ease of booking through their user-friendly app is a game-changer. The vehicles are always in pristine condition, and the overall experience is consistently delightful. I wholeheartedly recommend this taxi service to everyone – a perfect blend of professionalism and comfort!"
                    .
                </p>
                <div class="clients">
                    <img src="https://i.ytimg.com/vi/ZlcaOw5egA0/maxresdefault.jpg" alt="https://i.ytimg.com/vi/ZlcaOw5egA0/maxresdefault" width="150" height="150">
                    <h1>Sana Rathod</h1>
                </div>
            </div>
        </div>
    </div>














    <script src="script.js"></script>
</body>
</html>