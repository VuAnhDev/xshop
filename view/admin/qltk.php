<?php
include_once("model/dbhelp/getdata.php");
$sql = "SELECT * FROM user";
$data = getDataSQL($sql);
?>

<form action="controller/admin/qltk.php" method="POST" class="admin-form">
  <h2 class="messs">
    <?php
    if(isset($_SESSION['thongbao'])){
      echo $_SESSION['thongbao'];
      unset($_SESSION['thongbao']);
    }
    ?>
  </h2>

  <table class="admin-table">
    <tr>
      <th>ID</th>
      <th>Tên tài khoản</th>
      <th>Mật khẩu</th>
      <th>Số điện thoại</th>
      <th>level</th>
      <th>Option</th>
    </tr>
  <?php
      foreach($data as $item){
        $id = $item['id'];
        $name = $item['username'];
        $pass = $item['password'];
        $phone = $item['phone'];
        $level = $item['level'];


        echo '
          <tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$pass.'</td>
            <td>'.$phone.'</td>
            <td>'.$level.'</td>
            <td  class="table-option">
            <button type="submit" value="'.$id.'" name="delete">Xóa</button>
            </td>
          </tr>
        ';
      }

  ?>  

  <tr>
    <td></td><td></td><td></td><td></td><td></td>
    <td>
      <button type="button" onclick = "oRegister()">Thêm tài khoản</button>
    </td>
  </tr>
    

  </table>
</form> 
