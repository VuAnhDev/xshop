<?php

require('../model/config/config.php');
require('../model/config/conection.php');

$username = '';
$password = '';
$phone = '';

if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    

    $sql = "INSERT INTO `user`(`username`, `password`, `phone`) VALUES ('$username','$password','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo '<h1 style="color:blue; text-align:center; font:bold; font-size:xxx-lage; margin-top:200px; scale:3;">Đăng ký thành công</h1>';
        echo"<script>
        setInterval(locationhome, 2000);
        
        function locationhome() {
          window.location = '../index.php?login';
          
        }  
        </script>";
    
    } else {
        echo "Error: " . $sql . "<br>" . $conn->Error;
    }
    
    $conn->close();
}
?>
