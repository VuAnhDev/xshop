<?php


function getProducts()
{
  $data = [];

  include_once('config/config.php');
  include_once('config/conection.php');
 
  $sql = "SELECT * FROM products";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

      $data[] = $row;
    }
    return $data;
  } else {
    echo "0 results";
  }
  $conn->close();
}
