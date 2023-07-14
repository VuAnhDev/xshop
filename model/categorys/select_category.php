<?php

require_once('../config/config.php');
require_once('../config/conection.php');

$sql = "SELECT * FROM categorys";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["category_name"]. " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>