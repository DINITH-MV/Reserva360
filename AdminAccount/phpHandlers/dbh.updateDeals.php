<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/updateThingsToDo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Deals</title>
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
    $iD = $_GET['updateDealId'];
    $query = "SELECT *FROM `deals` WHERE ID = '$iD'";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_assoc($queryRun);
        $hName = $row['hotelName'];
        $image = $row['image'];
        $location = $row['location'];
        $description = $row['description'];
        $deal = $row['deal'];
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
                            <label>Name of the Hotel </label><br/>
                            <input type='text' name='hName' value=" .$hName. " required><br/>
                        </div>                        
                        <div>
                            <label>Image tag</label><br/>
                            <input type='text' name='image' value=" . $image . " required>
                        </div>
                        <div>
                            <label>Location</label><br/>
                            <input type='text' name='location' value=" . $location . " required>
                        </div>
                        <div>
                            <label>Description</label><br/>
                            <input type='text' name='description' value=" . $description . " required>
                        </div>
                        <div>
                            <label>Deal</label><br/>
                            <input type='text' name='deal' value=" . $deal . " required>
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
        $hName = $_POST['hName'];
        $image = $_POST['image'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $deal = $_POST['deal'];

        $query = "UPDATE `deals` SET `hotelName`='$hName',`image`='$image',`description`='$description',`location`='$location',`deal`='$deal' WHERE ID = $iD ";
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