<link rel="stylesheet" href="adminstyle.css">
<div class="admin-container" style="border: 1px solid red; width = 100%; min-height:80vh;">

    <ul class="admin-menu">

        <li class="admin-menu-item active" name="qldm">
            <a href='?action=qldm'>Quản lý danh mục</a>
        </li>
        <li class="admin-menu-item" name="qlsp">
            <a href='?action=qlsp'>Quản lý sản phẩm</a>
        </li>
        <li class="admin-menu-item" name="qltk">
            <a href='?action=qltk'>Quản lý tài khoản</a>
        </li>
    </ul>

    <div class="admin-content">
        <?php
            require_once("../../../controller/admindirection.php");
        ?>
    </div>
</div>
<script src="adminscript.js"></script>