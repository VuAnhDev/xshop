<header>
    <?php
    include_once("view/main_view/pages/login.php");
    include_once("view/main_view/pages/register.php");
    include_once("view/main_view/pages/cart.php");

    if(isset($_GET['login'])){
        echo "
        <script>
        document.getElementById('id01').style.display='block';
</script>";
    }
    ?>
    <div class="box">
        <div class="logo">
           <a href="index.php"> <img src="view/img/logo.png"></a>
        </div>
        <div class="menu">
            <ul>
                <a href="index.php">
                    <li class="active">Trang Chủ</li>
                </a>
                <a href="?page=danhsach">
                    <li>Danh Sách Sản Phẩm</li>
                </a>
                <a href="?page=contact">
                    <li>Liên Hệ</li>
                </a>
                <a href="?page=help">
                    <li>Hỗ Trợ</li>
                </a>

        </div>
        <div class="shop">
            <a onclick="document.getElementById('id02').style.display='block'" style="width:auto;">
                <i class="fa-solid fa-user-plus"></i>
                <div class="title">Đăng ký</div>
            </a>
            <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> <i class="fa-regular fa-user"></i>
                <div class="title">Đăng Nhập</div>
            </a>
            <a onclick="document.getElementById('cart').style.display='block'" style="width:auto;"> <i class="fa-solid fa-cart-shopping"></i>
            <div class="title">Giỏ Hàng</div>
            </a>
           
        </div>
    </div>
</header>