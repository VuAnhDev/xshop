<div id="id01" class="modal">

  <form class="modal-content animate" action="controller/user/login_controller.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close"
        title="Close Modal">&times;</span>
      <img src="
      public/img/avata2.png" alt="Avatar" class="avatar">
      <?php

      if(isset($_SESSION['thongBaoDN'])){
        echo"<script>
            document.getElementById('id01').style.display='block'
            </script>"; 
        echo '<h2 class="warning">'.$_SESSION["thongBaoDN"].'</h2>';
        unset($_SESSION['thongBaoDN']);
      }else{
      echo" <h2>Nhập thông tin đăng nhập</h2>";
      }
      ?>
    </div>
    <div class="container-log">
      <label for="username"><b>Tên Đăng Nhập:</b></label>
      <input type="text" placeholder="Vui lòng nhập tên đăng nhập" name="username" required>

      <label for="password"><b>Mật Khẩu:</b></label>
      <input type="password" placeholder="Vui lòng nhập mật khẩu" name="password" required>

      <button class="user" type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Nhớ mật khẩu
      </label>
    </div>

    <div class="container-log" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'"
        class="cancelbtn">Cancel</button>
      <span class="psw">Quên <a href="#">mật khẩu?</a></span>
    </div>
  </form>
</div>

<script>
  // Get the modal
  var modal = document.getElementById('id01');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>