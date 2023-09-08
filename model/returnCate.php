
<?php


  $data = [];
    if(!isset($conn)){

        include_once('config/config.php');
        include_once('config/conection.php');
    }
 
  $sql = "SELECT * FROM categorys";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

      $data['name'] = $row["category_name"];
      $data['id'] = $row["id_category"];
      echo  $data['name'].'/'; 
    }
  } else {
    echo "0 results";
  }
  $conn->close();