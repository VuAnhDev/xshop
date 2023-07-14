
<div id="id02" class="modal">
  <form class="modal-content animate" action="controller/register_controller.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="
      view/img/avata.png" alt="Avatar" class="avatar">
      <h2>Nhập thông tin đăng ký</h2>
    </div>

    <div class="container-log">
      <label username="username"><b>Tên Đăng Nhập:</b></label>
      <input type="text" placeholder="Vui lòng nhập tên đăng nhập" name="username" required>

      <label for="password"><b>Mật Khẩu:</b></label>
      <input type="password" placeholder="Vui lòng nhập mật khẩu" name="password" required>
      
      <label for="phone"><b>Số Điện Thoại:</b></label>
      <input type="text" placeholder="Vui lòng nhập số điện thoại" name="phone" required>
      
      <button type="submit" name ="register">Đăng ký</button>
    </div>
    <div class="container-log" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>