<?php
$connection = mysqli_connect("localhost", "root", "", "Reserva360");

if (isset($_POST["add1"])) {
  if (isset($_SESSION["reservation"])) {
    $item_array_id = array_column($_SESSION["reservation"], "product_id");

    $count = count($_SESSION["reservation"]);
    $item_array = array(
      'product_id' => $_GET["id"],
      'product_name' => $_POST["hidden_name1"],
      'product_map' => $_POST["hidden_map"],
    );
    $_SESSION["reservation"][0] = $item_array;
    echo '<script>window.location="Deals.php"</script>';
  } else {
    $item_array = array(
      'product_id' => $_GET["id"],
      'product_name' => $_POST["hidden_name1"],
      'product_map' => $_POST["hidden_map"],
    );
    $_SESSION["reservation"][0] = $item_array;
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "delete1") {
    foreach ($_SESSION["reservation"] as $keys => $value) {
      if ($value["product_id"] == $_GET["id"]) {
        unset($_SESSION["reservation"][$keys]);
        echo '<script>alert("Product has been removed")</script>';
        echo '<script>window.location="Deals.php"</script>';
      }
    }
  }
}
?>