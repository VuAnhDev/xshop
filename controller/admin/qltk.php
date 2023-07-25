<?php
session_start();
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');


if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $sql = "DELETE FROM user WHERE id = $id";
  $conn->query($sql);
  $conn->close();
  $_SESSION['thongbao'] = "Xóa thành công";
  header("location:../../index.php?page=admin&option=qltk");
}