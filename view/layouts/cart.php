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
        if (isset($_SESSION['cart'])) {
          foreach($_SESSION['cart'] as $item){
            echo '
            <div class="cart-item">
            <img src="public/img/products/'.$item["img"].'" alt="">
            <div class="title">'.$item["name_products"].'</div>
            <div class="option">
              <a>-</a>
              <h3>'.$item['numbs'].'</h3>
              <a>+</a>
            </div>
          </div>
            ';
          }
        }
        ?>



       


      </div>



    </div>
    <div class="cart-bottom">
      <div class="cart-total">
        <div class="title">Tổng tiền:</div>
        <div class="title total">0.000</div>
      </div>

      <div class="cart-btn">
        <button type="button" onclick="document.getElementById('cart').style.display='none'"
          class="cancelbtn">Cancel</button>
        <button class="by">Mua Hàng</button>
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
</script>