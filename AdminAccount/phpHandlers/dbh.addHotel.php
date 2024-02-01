<?php
session_start();
    include "./dbh.config.php";

    if(isset($_POST['submit'])) {
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

    $extension = array('jpg','jpeg','png');

    if(in_array($fileName_extension, $extension)){
       $destination = 'C:/xampp/htdocs/Reserva360/Hotel/images/'.$fileName;
        move_uploaded_file($fileTemp, $destination);

        $query = "INSERT INTO `hotels`(`Hotel_image`, `Location`, `Hotel_Name`, `Rate`, `Price`, `Map`, `Link_name`, `Link_Map`) VALUES ('$fileName','$location','$nameHotel','$rate','$price','$linkSite','$IDname','$linkMap')";
        $queryRun = mysqli_query($conn, $query); 
        if($queryRun){
            header("Location: ../php/Dashboard.php");
            echo "<script>Successfully Uploaded!</script>";
        }
        else{
            echo "OK";
        }
    
    }
}
?>

