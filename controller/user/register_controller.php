<?php
session_start();
require('../../model/config/config.php');
require('../../model/config/conection.php');
require('../../model/dbhelp/getuser.php');
require('../../model/fcart.php');

$username = '';
$password = '';
$repassword= '';
$phone = '';

if(isset($_POST['register'])){



    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $phone = $_POST['phone'];
    
    $dataUser = getUser();
    print_r($dataUser);
    if(in_array($username, $dataUser)){
        $_SESSION["thongBaoDK"] = "Tài khoản đã tồn tại";
        header("location:../../index.php");   
        die(); 
    }

    if($password != $repassword){
        $_SESSION["thongBaoDK"] = "Mật khẩu nhập lại không chính xác";
        header("location:../../index.php");   
        die();   
    }
    $sql = "INSERT INTO `user`(`username`, `password`, `phone`) VALUES ('$username','$password','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo '<h1 style="color:blue; text-align:center; font:bold; font-size:xxx-lage; margin-top:200px; scale:3;">Đăng ký thành công</h1>';
        echo"<script>
        setInterval(locationhome, 2000);
        
        function locationhome() {
          window.location = '../../index.php?login';
          
        }  
        </script>";
        newCart($username);   
    } else {
        echo "Error: " . $sql . "<br>" . $conn->Error;
    }
    
    $conn->close();
}
?>
