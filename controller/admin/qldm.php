<?php
include_once('../../model/config/config.php');
include_once('../../model/config/conection.php');


if(isset($_POST['update-category'])){
    var_dump($_POST);
}
if(isset($_POST['delete-category'])){
  $id =  $_POST['delete-category'];
  $sql = "DELETE FROM categorys WHERE id = $id";
  $conn->query($sql);
  $conn->close;
  header("location:../../index.php?page=admin");
}