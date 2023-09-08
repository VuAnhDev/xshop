<?php
include_once("model/dbhelp/getdata.php");
include_once("model/dbhelp/getcate.php");
$sql = "SELECT * FROM products";
$data = getDataSQL($sql);

?>

<form action="controller/admin/qlsp.php" method="POST" class="admin-form" enctype="multipart/form-data">
  <h2 class="messs">
    <?php
    if (isset($_SESSION['thongbao'])) {
      echo $_SESSION['thongbao'];
      unset($_SESSION['thongbao']);
    }
    ?>
  </h2>

  <table class="tbl-qlsp">

    
        <button type="button" onclick="oModal()">Thêm sản phẩm</button>
    <tr>
      <th>Id sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Mô tả</th>
      <th>Giá sản phẩm</th>
      <th>Ảnh</th>
      <th>Số lượng</th>
      <th>Danh mục</th>
      <th>OPTION</th>
    </tr>
    <?php
    foreach ($data as $item) {
      $id = $item['id_product'];
      $name = $item['name_product'];
      $details = $item['details'];
      $price = $item['price_product'];
      $thumb = $item['thumbnail'];
      $numb = $item['quantity'];
      $idcate = $item['id_category'];
      echo '
          <tr>
           
            <td>
              ' . $id . '
            </td>
            <td>
              <input class="title" type="text" value="' . $name . '" name="name' . $id . '">
            </td>
            <td>
              <input class="title" type="text" value="' . $details . '" name="details' . $id . '">
            </td>
            <td>
              <input type="text" value="' . $price . '" name="price' . $id . '">
            </td>
            <td class = "box-img">
                <img src="public/img/products/'.$thumb.'" alt="Thêm ảnh mới" onclick= "addimg('.$id.')"> 
                <input type="file" name="file' . $id . '"  class="box-input">       
            </td>
            <td> <input type="text" value="' . $numb . '" name="numb' . $id . '"></td>
            <td>
                  <select name="cate' . $id . '">  
                  ';


      $sql2 = "SELECT * FROM categorys ";
      $cate = getCate($sql2);
      foreach ($cate as $catei) {
        if ($idcate == $catei['category_name']) {
          echo '     <option value="' . $catei["category_name"] . '" selected>' . $catei["category_name"] . '</option>';
        } else
          echo '
                    <option value="' . $catei["category_name"] . '">' . $catei["category_name"] . '</option>
                    ';
      }

      echo '
                </select>
            </td>
            <td class="qlsp-option">
            <div>
             <button type="submit" value="' . $id . '" name="update">Sửa</button>
             <button type="submit" value="' . $id . '" name="delete">Xóa</button>
             </div>
            </td>
          </tr>
          ';
    }
    ?>
  </table>
</form>

<div class="admin-modal addproduct">
  <form action="controller/admin/qlsp.php" method="POST" class="add-form" enctype="multipart/form-data">
    <div>
      <h2 class="title">Thêm sản phẩm mới</h2>
    </div>
    <div>
      <label for="name">Tên sản phẩm</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="detals">Mô tả sản phẩm</label>
      <input type="text" name="details">
    </div>
    <div>
      <label for="price">Giá sản phẩm</label>
      <input type="text" name="price">
    </div>
    <div>
      <label for="img">Ảnh sản phẩm</label>
      <input type="file" name="img" >
    </div>
    <div>
      <label for="numb">Số lượng</label>
      <input type="text" name="numb" >
    </div>
    <div>
      <label>Chọn danh mục sản phẩm:</label>
      <select name="cate">
        <option>...</option>
        <?php $sql2 = "SELECT * FROM categorys ";
        $cate = getCate($sql2);
        foreach ($cate as $catei) {
          echo '
                   <option value="' . $catei["category_name"] . '">' . $catei["category_name"] . '</option>
               ';
        } ?>
      </select>
    </div>
    <div>

    </div>
    <button type="submit" name="add"> Thêm sản phẩm</button>
  </form>
</div>


<script>
  let admodal = document.querySelector(".admin-modal");
  function oModal() {
    admodal.style.display = "block";
  }
  window.onclick = function (event) {
    if (event.target == admodal) {
      admodal.style.display = "none";
    }
  }


  function addimg($value) {
  }
</script>