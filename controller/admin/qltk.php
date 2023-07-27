<?php
session_start();
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');
include_once('../../model/dbhelp/getuser.php');


if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $username = getUser($id)[0];
  $sql = "DELETE FROM user WHERE id = $id";
  $conn->query($sql);

  $sql2 = "DELETE FROM cart WHERE cart_name = '$username'";
  $conn->query($sql2);
  $conn->close();
  $_SESSION['thongbao'] = "Xóa thành công";
  header("location:../../index.php?page=admin&option=qltk");
}