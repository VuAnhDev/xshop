<?php
session_start();
include_once('../model/config/config.php');
include_once('../model/cart/fcart.php');


if (isset($_POST['id'])) {
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DB);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn->set_charset("utf8");
    $id = $_POST['id'];
    $sql = "SELECT * FROM products WHERE id_product = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        foreach ($result as $row) {

            if (!isset($_SESSION['cart'][$id])) {
                $cart_data = array(
                    "idc" => $row['id_product'],
                    "name_products" => $row['name_product'],
                    "img" => $row['thumbnail'],
                    "numbs" => 1,
                    "price" => $row['price_product'],

                );
                $_SESSION['cart'][$id] = $cart_data;
            } else {
                $cart_data = $_SESSION['cart'][$id];
                $cart_data = array(
                    "idc" => $row['id_product'],
                    "name_products" => $row['name_product'],
                    "img" => $row['thumbnail'],
                    "numbs" => (int) ($cart_data["numbs"] + 1),
                    "price" => $row['price_product'],
                );
                $_SESSION['cart'][$id] = $cart_data;
                echo $cart_data["numbs"];
            }
        }

        $value = json_encode($_SESSION['cart']);
        $namecart = $_SESSION['user'];
        updateCart($namecart, $value);
    }
}
if (isset($_POST["idc"])) {
    $idc = $_POST["idc"];
    $cart_data = $_SESSION['cart'][$idc];
    if ($cart_data["numbs"] > 1) {
        $cart_data["numbs"] =  (int) ($cart_data["numbs"] - 1) ;
        
        $_SESSION['cart'][$idc] = $cart_data;
        echo $cart_data["numbs"];
        
    }else {
       unset($_SESSION['cart'][$idc]);
    }
    $value = json_encode($_SESSION['cart']);
    $namecart = $_SESSION['user'];
    updateCart($namecart, $value);
    var_dump($_SESSION['cart']);
}

?>