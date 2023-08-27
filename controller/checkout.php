<?php


session_start();
include("../model/config/conection.php");
if(isset($_POST["submit"])){
    $dbname = $_SESSION['user'];
    $total = $_POST["total"];
    $value = json_encode(array (
        'name' => $_POST["name"],
        'phone' => $_POST["phone"],
        'email' => $_POST["email"],
        'location' => $_POST["location"]
    ));
        $cart = json_encode($_SESSION["cart"]);
    $sql = "INSERT INTO oders (`username`, `cart`, `value`, `total`) VALUES ('$dbname', '$cart','$value','$total')";

    if ($conn->query($sql) === TRUE) {
        echo 'Đặt hàng thành công';
        $_SESSION['thongbao']= "Đặt hàng thành công";
        header("location:../");
            
        unset($_SESSION['cart']);
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
  
}