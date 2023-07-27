<?php
session_start();
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');
include_once("../../model/dbhelp/getdata.php");

if (isset($_POST['update'])) {
  $id = $_POST['update'];
  $error = [];
  
  $size_accept = 10;
  if(isset($_FILES['file'.$id])){
    // extend files
    $ex = explode('.', $_FILES['file'.$id]['name']);
    $ext = end($ex);
    // name files
    $file_name = uniqid().'.'.$ext;
    
    //array accept format

    $accept = ['png','jpg','jpeg','gif'];

    if (in_array($ext , $accept)){

      $fsize = $_FILES['img']['size']/1024/1024;
      if($fsize < $size_accept){
        //files size accept
        $upload = move_uploaded_file($_FILES['file'.$id]['tmp_name'], '../../public/img/products/'.$file_name);
        if(!$upload){
          $error[] = "Upload_error";
        }

      }else {
        $error[] = "size_error";
      }
    }
    else {
      $error[] = "ext_error";
    }

  }

  $name = $_POST["name" . $id];
  $details = $_POST["details" . $id];
  $price = $_POST["price" . $id];
  $numb = $_POST["numb" . $id];
  $idcate = $_POST["cate" . $id];

  $quey = "SELECT name_product, details, price_product, thumbnail, quantity, id_category FROM products WHERE id_product = $id";
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
  if (in_array($name, $data[0]) && in_array($price, $data[0]) && in_array($numb, $data[0]) && in_array($idcate, $data[0]) && in_array($details, $data[0]) && in_array($file_name, $data[0])) {
    $_SESSION['thongbao'] = "Nội dung chưa thay đổi";
    header("location:../../index.php?page=admin&option=qlsp");
  } else {
    $sql = "UPDATE products SET name_product ='$name', details ='$details', price_product ='$price', quantity ='$numb', thumbnail ='$file_name', id_category ='$idcate' WHERE id_product = $id";
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


if (isset($_POST['add'])) {
  //files - handel
  $error = [];
  $file_name = "";
  $size_accept = 10;
  if(isset($_FILES["img"])){
    // extend files
    $ex = explode('.',$_FILES['img']['name']);
    $ext = end($ex);
    // name files
    $file_name = uniqid().'.'.$ext;
    
    //array accept format

    $accept = ['png','jpg','jpeg','gif'];

    if (in_array($ext , $accept)){

      $fsize = $_FILES['img']['size']/1024/1024;
      if($fsize < $size_accept){
        //files size accept
        $upload = move_uploaded_file($_FILES['img']['tmp_name'], '../../public/img/products/'.$file_name);
        if(!$upload){
          $error[] = "Upload_error";
        }

      }else {
        $error[] = "size_error";
      }
    }
    else {
      $error[] = "ext_error";
    }

  }
  // Files - handel - end

  $name = $_POST["name"];
  $details = $_POST["details"];
  $price = $_POST["price"];
  $numb = $_POST["numb"];
  $cate = $_POST["cate"];

  $sql = "INSERT INTO `products`(`name_product`, `details`, `price_product`, `quantity`, `thumbnail`, `id_category`) 
                          VALUES ('$name','$details','$price','$numb', '$file_name', '$cate')";
  if ($conn->query($sql) === TRUE) {
    $_SESSION['thongbao'] = "Thêm thành công";
    echo "thêm thành công";
    header("location:../../index.php?page=admin&option=qlsp");
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
}
