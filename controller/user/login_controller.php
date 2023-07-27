<?php

session_start();
require('../../model/config/config.php');
require('../../model/config/conection.php');
require('../../model/cart/fcart.php');

$username = '';
$password = '';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];    

    $sql = "SELECT username, password, level FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      $_SESSION["user"] = $username;
      $_SESSION["cart"] = $username;
      while($row = mysqli_fetch_assoc($result)) {
        $level = $row['level'];
        if($level==0){
          header('location:../../index.php?page=admin');
          $_SESSION['level'] = "0";
        } else {
          $_SESSION['level'] = "1";
          echo'dang nhap thanhcong';
      
          header('location:../../index.php?in');
        }
      }
        
      } else {
        $_SESSION["thongBaoDN"] = "Sai tên ĐN hoặc MK";
        header('location:../../index.php?login');
      }
      $conn->close();
}
    ?>