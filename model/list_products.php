<?php


function getProducts( $where = "")
{


  include_once('config/config.php');
  include_once('config/conection.php');

  if($where != ""){
    $sql = "SELECT * FROM products WHERE name_category = $where";
  }else{ 
    $sql = "SELECT * FROM products";
  }

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {

   

    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo

        '<a href="?page=details&id='. $row["id_product"].'"><div class="item">
                    <img src="' . $row["thumbnail"] . '" alt="">
                    <div class="content">
                        <div class="title">
                           ' . $row["name_product"] . '
                        </div>
                        <div class="price">
                        ' . $row["price_product"] . '$
                        </div>
                    </div>
                </div>
          </a>';
    }

  } else {
    echo "0 results";
  }
  $conn->close();
}
