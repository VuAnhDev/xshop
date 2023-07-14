<?php
require('../model/config/config.php');
require('../model/config/conection.php');

$username = '';
$password = '';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];    

    $sql = "SELECT username, password, level FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

      while($row = mysqli_fetch_assoc($result)) {
        $level = $row['level'];
        if($level==0){
          header('location:../index.php?page=admin');
        } else {

          echo'dang nhap thanhcong';
      
          header('location:../index.php');
        }
      }
        
      } else {
        echo "0 results";
      }
      $conn->close();
}
    ?>