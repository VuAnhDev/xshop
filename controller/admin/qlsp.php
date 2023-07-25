<?php
session_start();
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');
include_once("../../model/dbhelp/getdata.php");

if (isset($_POST['update'])) {
  $id = $_POST['update'];

  $name = $_POST["name" . $id];
  $details = $_POST["details" . $id];
  $price = $_POST["price" . $id];
  $numb = $_POST["numb" . $id];
  $idcate = $_POST["cate" . $id];
  
      $quey = "SELECT name_product, details, price_product, quantity, id_category FROM products WHERE id_product = $id";
      $data = [];

      $result = $conn->query($quey);

      if ($result->num_rows > 0) {
      // output data of each row
        while ($row = $result->fetch_assoc()) {
          
          $data[] = $row;
        }
          
      } else {
      echo "0 results";
      }
    if (in_array($name, $data[0]) && in_array($price, $data[0]) && in_array($numb, $data[0]) && in_array($idcate, $data[0]) && in_array($details, $data[0]) ) {
    $_SESSION['thongbao'] = "Nội dung chưa thay đổi";
      header("location:../../index.php?page=admin&option=qlsp");
    }else {
        $sql ="UPDATE products SET name_product ='$name', details ='$details', price_product ='$price', quantity ='$numb', id_category ='$idcate' WHERE id_product = $id";
      if ($conn->query($sql) === TRUE) {
        $_SESSION['thongbao'] = "Cập nhật thành công";    
      } else {
        echo "Error updating record: " . $conn->error;
      }
      $conn->close();
      header("location:../../index.php?page=admin&option=qlsp");

    }
}



if (isset($_POST['delete'])) {
  $id = $_POST['delete'];
  $sql = "DELETE FROM products WHERE id_product = $id";
  $conn->query($sql);
  $conn->close();
  $_SESSION['thongbao'] = "Xóa thành công";
  header("location:../../index.php?page=admin&option=qlsp");
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

if(isset($_POST['add'])){
  print_r($_POST);
}