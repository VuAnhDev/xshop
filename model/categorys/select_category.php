<?php


$sql = "SELECT * FROM categorys";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
   $data = $row;
  }
  return $datal;
} else {
  echo "0 results";
}
$conn->close();
?>