<?php
include_once("model/dbhelp/getdata.php");
$sql = "SELECT * FROM categorys";
$data = getDataSQL($sql);
?>
<h2 class="messs">
  <?php
  if(isset($_SESSION['thongbao'])){
    echo $_SESSION['thongbao'];
    unset($_SESSION['thongbao']);
  }
  ?>
</h2>
<form action="controller/admin/qldm.php" method="POST" class="admin-form">

  <table class="admin-table">
    <tr>
      <th>Tên danh mục</th>
      <th>Chức năng</th>
    </tr>

    <?php
    $i = 0;
    foreach ($data as $item) {
      $id = $item['id_category'];
      $name = $item['category_name'];
      $i++;
      echo '
            <tr>
              <td>
              
                <label for="category-name">' .$i. '. ID danh mục : '.$id.'</label>
                <input type="text" name="category-name' .$id. '" value="' . $name . '">
              </td>
              <td class="table-option">
                <button type="submit" value="' .$id. '" name="update-category">Sửa</button>
                <button type="submit" value="'.$id.'" name="delete-category">Xóa</button>
              </td>
            </tr>
          ';
    }
    ?>
    <tr>
      <td>
      </td> 
      <td>
        <button type="button" onclick="oModal()">Thêm danh mục mới</button>
      </td>
    </tr>
  </table>
</form>
    <!-- =================================================ADD ITEM===================================== -->
<div class="admin-modal">
    <form action="controller/admin/qldm.php" method="POST" class="add-form">
              <div>
                <h2 class="title">Nhập tên danh mục mới</h2>
              </div>
              <div>
                <input type="text" name="add-name">
              </div>
              <button type = "submit" name = "add-cate"> Thêm danh mục</button>
    </form>
</div>




<script>
  let admodal = document.querySelector(".admin-modal");
  function oModal(){
    admodal.style.display = "block";
  }
  window.onclick = function (event) {
    if (event.target == admodal) {
      admodal.style.display = "none";
    }
  }
</script>