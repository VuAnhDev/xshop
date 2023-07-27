

<div id="cart" class="modal">
  <!-- ==============================================Content================================================= -->
  <div class="cart-wrapper">
      <div class="cart-header">
          <img src="public/img/cart.svg" alt="">
          <h2>User name</h2>
        </div>
    <div class="cart-content">

      <div class="cart-list">
       
        <div class="cart-item">
          <img src="public/img/products/3.png" alt="">
          <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nemo.</div>
          <div class="option">
            <a>-</a>
            <h3>0</h3>
            <a>+</a>
          </div>
        </div>
        <div class="cart-item">
          <img src="public/img/products/3.png" alt="">
          <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nemo.</div>
          <div class="option">
            <a>-</a>
            <h3>0</h3>
            <a>+</a>
          </div>
        </div>
        <div class="cart-item">
          <img src="public/img/products/3.png" alt="">
          <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nemo.</div>
          <div class="option">
            <a>-</a>
            <h3>0</h3>
            <a>+</a>
          </div>
        </div>
        <div class="cart-item">
          <img src="public/img/products/3.png" alt="">
          <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nemo.</div>
          <div class="option">
            <a>-</a>
            <h3>0</h3>
            <a>+</a>
          </div>
        </div>
        <div class="cart-item">
          <img src="public/img/products/3.png" alt="">
          <div class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nemo.</div>
          <div class="option">
            <a>-</a>
            <h3>0</h3>
            <a>+</a>
          </div>
        </div>
        

      </div>



    </div>
    <div class="cart-bottom">
      <div class="cart-total">
        <div class="title">Tổng tiền:</div>
        <div class="title total">0.000</div>     
      </div>

      <div class="cart-btn" >
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