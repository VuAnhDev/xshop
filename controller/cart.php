<?php
session_start();
include_once('../model/config/config.php');
include_once('../model/cart/fcart.php');

$data = [];
$numb = 0;

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
           $data = $row;
        }
    }
}
?>