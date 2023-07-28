<div id="cart" class="modal">
  <!-- ==============================================Content================================================= -->
  <div class="cart-wrapper">
    <div class="cart-header">
      <img src="public/img/cart.svg" alt="">
      <h2>
        <?php if (isset($_SESSION['user'])) {
          echo $_SESSION['user'];
        } else
          echo "CART"; ?>
      </h2>
    </div>
    <div class="cart-content">
      <div class="cart-list">

        <?php
        $total = 0;
        if (isset($_SESSION["cart"])) {
          if (count($_SESSION['cart']) > 0) {
            $sl = 0;
            
            $price = 0;

            foreach ($_SESSION['cart'] as $item) {
              $price = $item['price'];
              $sl += $item['numbs'];
              $total += $price * $item['numbs'];
              echo '
            <div class="cart-item">
            <img src="public/img/products/' . $item["img"] . '" alt="">
            <div class="title">' . $item["name_products"] . '
            <p>
            ' . number_format(" $price", 0, ",", ".") . ' VNĐ</p>
            </div>
            <div class="option">
              <button onclick="minus('.$item["idc"].')">-</button>
              <h3 id="numb'.$item["idc"].'">' . $item['numbs'] . '</h3>
              <button onclick="flus('.$item["idc"].')">+</button>
            </div>
          </div>
            ';
            }
           
          }
          
        } else {
          echo "";
        }
        ?>






      </div>



    </div>
    <div class="cart-bottom">
      <div class="cart-total">
        <div class="title">Tổng tiền:</div>
        <div class="title total" id="total">
          <?php echo number_format(" $total", 0, ",", "."); ?> VNĐ
        </div>
      </div>

      <div class="cart-btn">
        <button type="button" onclick="document.getElementById('cart').style.display='none'"
          class="cancelbtn">Cancel</button>
        <a href="checkout.php"><button class="by">Mua Hàng</button></a>
      </div>

    </div>
  </div>
  <!-- =====================================modal================================================================ -->
</div>
<script>
  // Get the modal
  var modal = document.getElementById('cart');
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";

    }
  }
        function flus(id){
            $.post("controller/cart.php", {'id': id}, function(data, status){
                // alert("Data: " + data + "\nStatus: " + status);
              $('#numb'+id).text(data);
             
            });
        }
        function minus(idc){
            $.post("controller/cart.php", {'idc': idc, 'ac':'minus'}, function(data, status){
                $('#numb'+idc).text(data);
            });
        }
</script>