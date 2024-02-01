<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/updateThingsToDo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Flights</title>
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
    $iD = $_GET['updateFlightId'];
    $query = "SELECT *FROM `flights` WHERE ID = '$iD'";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_assoc($queryRun);
        $departure = $row['departure'];
        $durationD = $row['depTime'];
        $arrival = $row['arrival'];
        $durationA = $row['arrTime'];
        $date = $row['date'];
        $airline = $row['airline'];
        $price = $row['price'];
    }
    echo "
    <div id='logInBox'>
        <div class='mainContent'>
            <div class='headerAndInputs'>               

                <div class='content'>
                    <div class='title'>
                        <h2>Update the Flights <br/></h2>
                    </div>
                    <form action='' class='form-group' method='POST' enctype='multipart/form-data' >
                        <div>
                            <label>Departure </label><br/>
                            <input type='text' name='departure' value=" .$departure. " required><br/>
                        </div>                        
                        <div>
                            <label>Duration from departure</label><br/>
                            <input type='text' name='catagory' value=" . $durationD . " required>
                        </div>
                        <div>
                            <label>Arrival</label><br/>
                            <input type='text' name='arrival' value=" . $arrival . " required>
                        </div>
                        <div>
                            <label>Duration from arrival</label><br/>
                            <input type='text' name='durationA' value=" . $durationA . " required>
                        </div>
                        <div>
                            <label>Airline </label><br/>
                            <input type='text' name='airline' value=" . $airline . " required>
                        </div>
                        <div>
                            <label>Price</label><br/>
                            <input type='text' name='price' value=" . $price . " required>
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
        $departure = $_POST['departure'];
        $durationD = $_POST['durationD'];
        $arrival = $_POST['arrival'];
        $durationA = $_POST['durationA'];
        $date = $_POST['date'];
        $airline = $_POST['airline'];
        $price = $_POST['price'];

        $query = "UPDATE `flights` SET `departure`='$departure',`depTime`='$durationD',`arrival`='$arrival',`arrTime`='$durationA', `airline`='$airline',`price`='$price' WHERE ID = $iD ";
        $queryRun = mysqli_query($conn, $query);        

        if ($queryRun) {
            echo "<script>alert('Successfully updated Flight')</script>";
        } else {
            die(mysqli_error($conn));
        }
    }
    ?>
</body>

</html>