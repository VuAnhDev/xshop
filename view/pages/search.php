<?php
    $key = $_GET["key"];
    require ("model/config/config.php");
    $conn = new mysqli(HOST,USERNAME,PASSWORD,DB);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $conn -> set_charset("utf8");
    $data=[];
   
  $sql = "SELECT * FROM products WHERE name_product LIKE '%$key%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $data []= $row;
    }?>

  <div class="list">
    <h2>Danh sách sản phẩm theo từ khóa <?php echo$key ?></h2>


    <?php //list-product
   
    
    foreach ($data as $item) {

        echo

    '<a href="?page=details&id='. $item["id_product"].'"><div class="item">
                <img src="public/img/products/' . $item["thumbnail"] . '" alt="">
                <div class="content">
                    <div class="title">
                       ' . $item["name_product"] . '
                    </div>
                    <div class="price">
                    ' . $item["price_product"] . '$
                    </div>
                </div>
            </div>
      </a>';
    }
    ?>
</div>
<ul class="listPage">
        <li>0</li>
</ul>
<script src="commons/utility/paging.js"></script>
<?php
} else {
    echo "<h2>Không tìm thấy sản phẩm với từ khóa: ".$key."</h2>";
  }
  $conn->close();
?>
