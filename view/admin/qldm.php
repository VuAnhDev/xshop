<?php
include_once("model/dbhelp/getdata.php");
$sql = "SELECT * FROM categorys";
$data = getDataSQL($sql);
?>

<form action="controller/admin/qldm.php" method="POST" class="admin-form">

  <table class="admin-table">
    <tr>
      <th>Tên danh mục</th>
      <th>Chức năng</th>
    </tr>

    <?php
    $i = 0;
    foreach ($data as $item) {
      $id = $item['id'];
      $name = $item['category_name'];
      $i++;
      echo '
            <tr>
              <td>
              
                <label for="category-name">' .$i. '. ID danh mục : '.$id.'</label>
                <input type="text" name="category-name" value="' . $name . '">
              </td>
              <td class="table-option">
                <button type="submit" name="update-category">Sửa</button>
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

<div class="admin-modal">
</div>
<script>
  let admodal = document.querySelector(".admin-modal");
  function oModal(){
    admodal.style.display = "block";
  }
  admodal.addEventListener("click",()=>{
    admodal.style.display = "none";
  })

</script>