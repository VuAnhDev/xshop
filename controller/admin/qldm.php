<?php
session_start();
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');

if (isset($_POST['update-category'])) {
  $id = $_POST['update-category'];
  $key = "category-name" . $id;
  $name = $_POST[$key];
  $quey = "SELECT category_name FROM categorys WHERE id = $id";
  $nName = $conn->query($quey)->fetch_assoc();
  if ($name != $nName["category_name"]) {
    $sql = "UPDATE categorys SET category_name = '$name' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
      $_SESSION['thongbao'] = "Cập nhật thành công";
    } else {
      echo "Error updating record: " . $conn->error;
    }
    $conn->close();
    header("location:../../index.php?page=admin");

  } else {
    $_SESSION['thongbao'] = "Nội dung chưa thay đổi";
    header("location:../../index.php?page=admin");

  }
}



if (isset($_POST['delete-category'])) {
  $id = $_POST['delete-category'];
  $sql = "DELETE FROM categorys WHERE id = $id";
  $conn->query($sql);
  $conn->close();
  $_SESSION['thongbao'] = "Xóa thành công";
  header("location:../../index.php?page=admin");
}


if (isset($_POST['add-cate'])) {
  $name = $_POST['add-name'];

  $sql = "SELECT * FROM categorys WHERE category_name ='$name'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $_SESSION['thongbao'] = "Đã tồn tại danh mục";
    header("location:../../index.php?page=admin");
  } else {
    $sql = "INSERT INTO categorys (category_name) VALUE ('$name')";
    if ($conn->query($sql) === TRUE) {
      $_SESSION['thongbao'] = "Thêm thành công";
      header("location:../../index.php?page=admin");
    } else {
      echo "Error updating record: " . $conn->error;
    }
    $conn->close();
  }
}