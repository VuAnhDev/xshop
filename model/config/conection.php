<?php
require_once('config.php');


$conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn -> set_charset("utf8");