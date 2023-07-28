<header>
    <?php
    session_start();
    include_once("view/layouts/login.php");
    include_once("view/layouts/register.php");
    include_once("view/layouts/cart.php");
    

    if(isset($_GET['login'])){
        echo "
        <script>
        document.getElementById('id01').style.display='block';
        </script>";
    }        
      
    ?>
    <div class="box">
        <div class="logo">
           <a href="index.php"> <img src="public/img/logo.png"></a>
        </div>
        <div class="menu">
            <ul>
                <a href="index.php">
                    <li class="<?php if(!isset($_GET['page'])){
            echo'active';
        }; ?>">Trang Chủ</li>
                </a>
                <a href="?page=danhsach" >
                    <li class="<?php if($_GET['page'] === 'danhsach'){
            echo'active';
        }; ?>" >  Danh sách sản phẩm              
                    </li>   
                </a>
                <a href="?page=contact">
                <li class="<?php if($_GET['page'] === 'contact'){
            echo'active';
        }; ?>" >Liên Hệ</li>
                </a>
                <a href="?page=help">
                <li class="<?php if($_GET['page'] === 'help'){
            echo'active';
        }; ?>" >Hỗ Trợ</li>
                </a>
            </ul>

        </div>
        <div class="shop">
            <?php
                 if(isset($_SESSION['user'])){
                    if($_SESSION['level'] === '0'){
                        $tempHref = "index.php?page=admin";
                    }
                    else
                    {
                        $tempHref = "index.php";
                    }
    
                    
                      echo'
                      <a href="'.$tempHref.'"> 
                      <i class="fa-solid fa-user"></i>
                      <div class="avata-name">'.$_SESSION['user'].'</div>
                      </a>
                      <a onclick="oCart()" style="width:auto;"> 
                      <i class="fa-solid fa-cart-shopping"></i>
                      <div class="title">Giỏ Hàng</div>
                      </a>
                      
                      <a href="model/logout.php">
                      <i class="fa-solid fa-right-from-bracket"></i>
                        <div class="title">Đăng Xuất</div>
                       </a>
                      '   ;     
                }
                else{
                    echo '
                    <a id="btn-log1" onclick="oRegister()" style="width:auto;">
                      <i class="fa-solid fa-user-plus"></i>
                      <div class="title">Đăng ký</div>
                     </a>
                    <a id="btn-log2" onclick="oLogin()" style="width:auto;"> 
                        <i class="fa-regular fa-user"></i>
                        <div class="title">Đăng Nhập</div>
                    </a>
                    ';
                }
            ?>                                          
        </div>
    </div>
</header>