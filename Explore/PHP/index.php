<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <script src="https://kit.fontawesome.com/bf6b97b43f.js" crossorigin="anonymous"></script>
    <script src="../JS/enquiry.js"></script>
</head>

<body>
    <?php
    include "header.php";
    include "../phpHandlers/dbh.config.php";
    ?>
    <!-- SECTION 1 -->
    <div class="header">
        <div class="navBar">
            <nav>
                <a href="http://localhost/Reserva360/Explore/PHP/index.php">Explore</a>
                <a href="http://localhost/Reserva360/Flights/PHP/Flights.php">Flights</a>
                <a href="http://localhost/Reserva360/Hotel/PHP/Hotel.php">Hotels</a>
                <a href="http://localhost/Reserva360/ThingsToDo/PHP/ThingsToDo.php">Things to do</a>
                <a href="http://localhost/Reserva360/Deals/PHP/Deals.php">Deals</a>
                <div class="animation start-explore"></div>
            </nav>
        </div>
        <div class="container">
            <h1>Find Your Next Travel </h1>
        </div>
        <!-- Search Box -->
        <div class="search-bar">
            <form>
                <div class="location-input">
                    <label>Location</label>
                    <input type="text" placeholder="Where are you going?">
                </div>
                <div id="checkIn">
                    <label>Check in</label>
                    <input type="date" placeholder="Add Date">
                </div>
                <div id="checkOut">
                    <label>Check out</label>
                    <input type="date" placeholder="Add Date">
                </div>
                <div>
                    <label>Guest</label>
                    <input type="text" placeholder="Add Guest">
                </div>
                <button type="submit" name="search"> <a type="submit" href="http://localhost/Reserva360/Reservations/PHP/Hotel.php"> <img src="../images/search.png"> </a></button>
            </form>
        </div>
    </div>
    </div>

    <!-- SECTION 2 -->
    <div class="container">
        <h2 class="subtitle">Exclusives</h2>
        <div class="exclusives">
            <div>
                <div class="img-container">
                    <img src="../images/image-1.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>London</h3>
                        <p>Starts @ $350</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-2.png" alt="">
                </div>

                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Switzerland</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-3.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Australia</h3>
                        <p>Starts @ $300</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-4.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>France</h3>
                        <p>Starts @ $350</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-5.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Amesterdam</h3>
                        <p>Starts @ $200</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-6.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Netherlands</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-7.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>New York</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-8.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Chicago</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-9.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>San Fransico</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="img-container">
                    <img src="../images/image-10.png" alt="">
                </div>
                <div class="overlay">
                    <div class="overlay_content">
                        <h3>Shangai</h3>
                        <p>Starts @ $250</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- Trending Places -->
        <h2 class="subtitle">Trending Places </h2>
        <div class="trending">
            <div>
                <img src="../images/dubai.png" alt="">
                <h3>Dubai</h3>
            </div>
            <div>
                <img src="../images/new-york.png" alt="">
                <h3>New York</h3>
            </div>
            <div>
                <img src="../images/paris.png" alt="">
                <h3>Paris</h3>
            </div>
            <div>
                <img src="../images/new-delhi.png" alt="">
                <h3>New Delhi</h3>
            </div>
        </div>

        <div class="cta">
            <h3>Sharing Is <br> Earing Now</h3>
            <p>Great opportunity to make money by <br> sharing your extra space.</p>
            <a href="#" class="cta-btn">Know More </a>
        </div>

        <!-- Traveller stories -->
        <h2 class="subtitle">Travellers Stories</h2>
        <div class="stories">
            <div>
                <img src="../images/story-1.png">
                <p>Popular Europen countries with a budget of just $10,000</p>
            </div>
            <div>
                <img src="../images/story-2.png">
                <p>Traveled more than 100 countries in less than a year</p>
            </div>
            <div>
                <img src="../images/story-3.png">
                <p>Best experience you get while travelling to Thailand</p>
            </div>
        </div>

        <a href="#" class="start-btn">Start Making Money</a>


        <!-- Contact US -->
        <div class="contact">
            <form action="" class="enquiry" method="POST">
                <h3> MAKE ENQUIRY </h3>
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your email id" required>
                <input type="telo" name="phone" placeholder="Phone number" required>
                <textarea type="text" name="message" placeholder="How can we help you?"> </textarea>
                <button type="submit" name="submit"> Send </button>
            </form>
        </div>

    </div>
    <?php

    if (isset($_POST["submit"])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `inquiry` (`name`, `email`, `phone`, `message`) VALUES('$name', '$email', $phone, '$message')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script> alert('Successfully !!') </script>";        } else {
            echo "<script> alert('Unsuccessfully !!') </script>";
        }

        mysqli_close($conn);
    }

    if (isset($_POST["subscribe"])) {

        $email = $_POST['email'];

        $sql = "INSERT INTO subscribe (email) VALUES('$email')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script> alert('Successfully subscribed !!') </script>";
        } else {
            header("location : index.php");
            echo "<script> alert('Unsuccessfully !!') </script>";
        }
    }

    include "./Footer.php"
    ?>
</body>

</html>