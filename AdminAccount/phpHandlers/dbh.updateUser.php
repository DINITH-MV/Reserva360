<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/updateHotel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>User</title>
</head>

<body>

    <?php
    include "../PHP/Header.php";
    include "./dbh.config.php";
    ?>

    <div>
        <button type="button" class="backButton" onclick="history.back()"><i class="fa fa-duotone fa-arrow-left"></i></a>
        </button>
    </div>

    <?php
    $iD = $_GET['updateUserId'];
    $query = "SELECT *FROM `users` WHERE userID = '$iD'";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_assoc($queryRun);
        $username = $row['username'];
        $aEmail = $row['email'];
        $fName = $row['fname'];
        $lName = $row['lname'];
        $password = $row['password'];
        $mNumber = $row['pnumber'];
    }
    echo "
    <div id='logInBox'>
        <div class='mainContent'>
            <div class='headerAndInputs'>               

                <div class='content'>
                    <div class='title'>
                        <h2>Update the User <br/></h2>
                    </div>
                    <form action='' class='form-group' method='POST' enctype='multipart/form-data' >
                        <div>
                            <label>Email </label><br/>
                            <input type='text' name='aEmail' value=" . $aEmail . " required><br/>
                        </div>                        
                        <div>
                            <label>First name</label><br/>
                            <input type='text' name='fName' value=" . $fName . " required>
                        </div>
                        <div>
                            <label>Last name</label><br/>
                            <input type='text' name='lName' value=" . $lName . " required>
                        </div>
                        <div>
                            <label>Username</label><br/>
                            <input type='text' name='username' value=" . $username . " required>
                        </div>
                        <div>
                            <label>The link of the Site</label><br/>
                            <input type='text' name='password' value=" . $password . " required>
                        </div>
                        <div>
                            <label>Phone number</label><br/>
                            <input type='text' name='mNumber' value=" . $mNumber . " required>
                        </div>
                       
                        <div>
                            <input type='submit' name='update' value='update' class='btn'/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div> ";

    include '../PHP/Footer.php';

    if (isset($_POST['update'])) {
        $username = $_POST['username'];
        $aEmail = $_POST['aEmail'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $password = $_POST['password'];
        $mNumber = $_POST['mNumber'];

        $query = "UPDATE `regusers` SET `username`='$username',`email`='$aEmail',`fname`='$fName',`lname`='$lName',`password`='$password',`pnumber`='$mNumber' WHERE userID = $iD ";
        $queryRun = mysqli_query($conn, $query);

        if ($queryRun) {
            echo "<script>alert('Successfully updated User')</script>";
        } else {
            die(mysqli_error($conn));
        }
    }


    ?>
</body>

</html>