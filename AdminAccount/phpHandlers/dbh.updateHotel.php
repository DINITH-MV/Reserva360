<!-- SESSION START -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../CSS/updateHotel.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <title>Hotel</title>
</head>

<body>

    <?php
    include "../PHP/Header.php";
    include "./dbh.config.php";
    ?>

    <div>
      <button type="button" class="backButton">
        
        <a href="http://localhost/Reserva360/AdminAccount/php/Dashboard.php"><i class="fa fa-duotone fa-arrow-left"></i></a>
      </button>
    </div>
    
    <?php
    $iD = $_GET['updateHotelId'];
    $query = "SELECT *FROM `hotels` WHERE ID = '$iD'";
    $queryRun = mysqli_query($conn, $query);

    if ($queryRun) {
        $row = mysqli_fetch_assoc($queryRun);
        $location = $row['Location'];
        $nameHotel = $row['Hotel_Name'];
        $rate = $row['Rate'];
        $price = $row['Price'];
        $linkSite = $row['Map'];
        $IDname = $row['Link_name'];
        $linkMap = $row['Link_Map'];
    }
    echo "
    <div id='logInBox'>
        <div class='mainContent'>
            <div class='headerAndInputs'>               

                <div class='content'>
                    <div class='title'>
                        <h2>Update the Hotel <br/>" . $nameHotel . "</h3>
                    </div>
                    <form action='' class='form-group' method='POST' enctype='multipart/form-data' >
                        <div>
                            <label>The name of the Hotel</label><br/>
                            <input type='text' name='name' value=" .$nameHotel. " required><br/>
                        </div>
                        <div>
                            <label>The location</label><br/>
                            <input type='text' name='location' value=" . $location . " required>
                        </div>
                        <div>
                            <label>The rate</label><br/>
                            <input type='text' name='rate' value=" . $rate . " required>
                        </div>
                        <div>
                            <label>The price</label><br/>
                            <input type='text' name='price' value=" . $price . " required>
                        </div>
                        <div>
                            <label>The link of the Site</label><br/>
                            <input type='text' name='map' value=" . $linkSite . " required>
                        </div>
                        <div>
                            <label>The nameID</label><br/>
                            <input type='text' name='link_name' value=" . $IDname . " required>
                        </div>
                        <div>
                            <label>The link of Map</label><br/>
                            <textarea cols='130' row='16' type='text' name='map_link' required>" . $linkMap . "</textarea>
                        </div>
                        <div>
                            <label>The hotel image</label><br/>
                            <input class = 'img' type='file' name='imageHotel' >
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
        $location = $_POST['location'];
        $nameHotel = $_POST['name'];
        $rate = $_POST['rate'];
        $price = $_POST['price'];
        $linkSite = $_POST['map'];
        $IDname = $_POST['link_name'];
        $linkMap = $_POST['map_link'];

        // For the image of the Hotel
        $file = $_FILES['imageHotel'];
        $fileTemp = $_FILES['imageHotel']['tmp_name'];
        $fileName = $_FILES['imageHotel']['name'];
        $fileError = $_FILES['imageHotel']['error'];
        $fileName_separate = explode('.', $fileName);
        $fileName_extension = strtolower(end($fileName_separate));

        $extension = array('jpg', 'jpeg', 'png');

        $query = "UPDATE `hotels` SET `Hotel_image`='$fileName',`Location`='$location',`Hotel_Name`='$nameHotel',`Rate`='$rate',`Price`='$price',`Map`='$linkSite',`Link_name`='$IDname',`Link_Map`='$linkMap' WHERE ID = $iD ";
        $queryRun = mysqli_query($conn, $query);        

        if ($queryRun) {
            echo "<script>alert('Successfully Hotel updated')</script>";
        } else {
            die(mysqli_error($conn));
        }
    }


    ?>
</body>

</html>