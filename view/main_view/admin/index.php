<link rel="stylesheet" href="view/css/adminstyle.css">
<div class="admin-container" style="border: 1px solid red; width = 100%; min-height:80vh;">

    <ul class="admin-menu">

        <li class="admin-menu-item active" name="qldm">
            <a>Quản lý danh mục</a>
        </li>
        <li class="admin-menu-item" name="qlsp">
            <a >Quản lý sản phẩm</a>
        </li>
        <li class="admin-menu-item" name="qltk">
            <a>Quản lý tài khoản</a>
        </li>
    </ul>


    <div class="admin-content">
        <div class="fcontent active" name = "qldm">
            <?php
            include('qldm.php');
            ?>
        </div>
        <div class="fcontent" name = "qlsp">
            <?php
            include('qlsp.php');
            ?>
        </div>
        <div class="fcontent" name = "qltk">
            <?php
            include('qltk.php');
            ?>
        </div>
        
    </div>
</div>
<script src="view/js/admin_menu_active.js"></script>