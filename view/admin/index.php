
<!-- if(isset($_SESSION['level']) ==="1"){
    echo '
    <script>
        window.location="index.php";
    </script>';
    die();
} -->


<link rel="stylesheet" href="public/css/adminstyle.css">
<div class="admin-container" width = 100%; min-height:80vh;>

<div class="admin-content">
        <div class="fcontent active">
        <?php
        $active = "1";
        $option = "";
        if(isset($_GET["option"])){
            $option = $_GET["option"];
            
            if($option == "viewcart"){
                $active="4";
            }
            elseif($option == "qlod"){
                $active="4";
            }
            elseif($option == "qltk"){
                $active="3";
            }
            elseif($option == "qlsp"){
                $active="2";
            }           
            else{
                $active = "1";
            }
        }
        else{
            $active = "1";
        }
            ?>
        </div>        
</div>
    <ul class="admin-menu">

        <li class="admin-menu-item <?php if($active==="1"){echo" active";}?>" name="1">
            <a href="index.php?page=admin&option=qldm">Quản lý danh mục</a>         
        </li>
        <li class="admin-menu-item <?php if($active==="2"){echo" active";}?>" name="2">
            <a href="index.php?page=admin&option=qlsp">Quản lý sản phẩm</a>           
        </li>
        <li class="admin-menu-item <?php if($active==="3"){echo" active";}?>" name="3">
            <a href="index.php?page=admin&option=qltk">Quản lý tài khoản</a>
        </li>
        <li class="admin-menu-item <?php if($active==="4"){echo" active";}?>" name="3">
            <a href="index.php?page=admin&option=qlod">Quản lý đơn đặt</a>
        </li>
    </ul>  
</div>

<?php
        $option = "";
        if(isset($_GET["option"])){
            $option = $_GET["option"];
            
            if($option == "qltk"){
                include('qltk.php');
            }
            elseif($option == "viewcart"){
                include('viewcart.php');
            }           
            elseif($option == "qlsp"){
                include('qlsp.php');
            }           
            elseif($option == "qlod"){
                include('qlod.php');
            }           
            else{
                include('qldm.php');
            }
        }
        else{
            include('qldm.php');
        }
            ?>
<script src="commons/utility/active_menu.js"></script>

