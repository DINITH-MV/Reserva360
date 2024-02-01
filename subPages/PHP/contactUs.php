<?php
include "../phpHandlers/dbh.config.php";
include './Header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../CSS/contactUs.css">
    <script src="https://kit.fontawesome.com/fd20cad007.js" crossorigin="anonymous"></script>
</head>

<body>
    
        <div class="contact-box">
            <div class="contact-left">
                <h1>Connect With Us</h1>
                <p><b>Need any help related bookings? fill the form</b></p>
                <form action="./dbh.contactUs.php" method="POST">
                <?php
                $sql1 = "SELECT * FROM users WHERE userID = '$id';";
                $result1 = mysqli_query($conn, $sql1);
                $resultCheck1 = mysqli_num_rows($result1);
                if ($resultCheck1 > 0) {
                    while ($row = mysqli_fetch_assoc($result1)) {
                ?>
                    <div class="input-row">
                        <label>Full Name</label>
                        <input type="text" name="name" value="<?php echo $row['username'] ?>" required>
                    </div>
                    <div class="input-row">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $row['email'] ?>" required>
                    </div>
                    <div class="input-row">
                        <label>Mobile Number</label>
                        <input type="text" name="mobile" value="<?php echo $row['pnumber'] ?>" required>
                    </div>
                    <div class="input-row">
                        <label>Message</label>
                        <textarea name="message" cols="200" rows="8" placeholder="Typing..."></textarea required>
                    </div>
                    <?php } }?>
                    <div class="input-row">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            echo "<input type='submit' name='submit' value='Send'>";
                        } else {
                            echo "<button class='btn'>You are not login</button>";
                        }
                        ?>
                    </div>
                </form>
            </div>
            
        </div>
    
    
</body>
</html>

<?php
include './footer.php';
?>