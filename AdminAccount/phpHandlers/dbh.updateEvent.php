<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/updateThingsToDo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Event</title>
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
    $iD = $_GET['updateEventId'];
    $query = "SELECT *FROM `thingstodo` WHERE ID = '$iD'";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_assoc($queryRun);
        $event = $row['event'];
        $catagory = $row['catagory'];
        $location = $row['place'];
        $description = $row['description'];
        $price = $row['price'];
    }
    echo "
    <div id='logInBox'>
        <div class='mainContent'>
            <div class='headerAndInputs'>               

                <div class='content'>
                    <div class='title'>
                        <h2>Update the Event <br/></h2>
                    </div>
                    <form action='' class='form-group' method='POST' enctype='multipart/form-data' >
                        <div>
                            <label>Things To Do </label><br/>
                            <input type='text' name='event' value=" .$event. " required><br/>
                        </div>                        
                        <div>
                            <label>Catagory</label><br/>
                            <input type='text' name='catagory' value=" . $catagory . " required>
                        </div>
                        <div>
                            <label>Location</label><br/>
                            <input type='text' name='place' value=" . $location . " required>
                        </div>
                        <div>
                            <label>Description</label><br/>
                            <input type='text' name='description' value=" . $description . " required>
                        </div>
                        <div>
                            <label>The link of the Site</label><br/>
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
        $event = $_POST['event'];
        $catagory = $_POST['catagory'];
        $location = $_POST['place'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        $query = "UPDATE `thingstodo` SET `event`='$event',`place`='$location',`catagory`='$catagory',`description`='$description',`price`='$price' WHERE ID = $iD ";
        $queryRun = mysqli_query($conn, $query);        

        if ($queryRun) {
            echo "<script>alert('Successfully updated Event')</script>";
        } else {
            die(mysqli_error($conn));
        }
    }

    ?>
</body>

</html>