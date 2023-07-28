<!--------------------banner-------------------->
<?php
require_once("model/config/conection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id_product = $id";

$data = [];

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

    $data[] = $row;
  }

} else {
  echo "0 results";
}
?>

<div class="banner detais-banner">
    <div class="tile">
        Hệ Thống Giày Thể Thao Số 1 Hà Nội
    </div>
    <div class="detail">
        <div class="info">
            <h2>
                <?php echo $data[0]['name_product']; ?>
            </h2>
            <div class="des">
            <?php echo $data[0]['details']; ?>
            </div>
        </div>
        <div class="img">
            <img src="public/img/products/<?php echo $data[0]['thumbnail'];?>" alt="">
        </div>
        <div class="option">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellat, vitae? Eum sint odio, earum consectetur aut
            reprehenderit maiores illo est.

            <br>
            <b>Color</b> <br>
            <div class="elipse" style="background-color: #555;"></div>
            <div class="elipse" style="background-color: aqua;"></div>
            <div class="elipse" style="background-color: brown;"></div>
            <button class="btn-add cart" onclick="addcart(<?php echo $id; ?>)">
                Thêm vào giỏ hàng
            </button>
        </div>
    </div>
</div>
<!--------------------banner-------------------->
<div class="list">
    <h2>Có thể bạn quan tâm</h2>

    <?php
        $sql = "SELECT * FROM products WHERE id_product ORDER BY RAND()
        LIMIT 6";

        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo '
                    <a href="?page=details&id='.$row['id_product'].'">
                        <div class="item">
                        <img src="public/img/products/'.$row['thumbnail'].'" alt="">
                        <div class="content">
                        <div class="title">
                            '.$row['name_product'].'
                        </div>
                        <div class="price">
                        '.$row['price_product'].'
                        </div>
                    </div>
                </div>
            </a>
            ';
          }
        
        } else {
          echo "0 results";
        }
    ?>
    
</div>

<script>
        function addcart(id){
            $.post("controller/cart.php", {'id': id}, function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);
            });
            location.reload();
            alert("Thêm vào giỏ hàng thành công");
        }
</script>