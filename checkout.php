<?php

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/main_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php
    include_once('view/layouts/header.php'); ?>

    <div class="checkout-container">\
        <div class="checkout-left">
            <h2>Danh sách giỏ hàng</h2>

            <div class="cart-list">

                <?php

                if (isset($_SESSION['cart'])) {
                    $sl = 0;
                    $total = 0;
                    foreach ($_SESSION['cart'] as $item) {
                        $price = $item['price'];
                        $sl += $item['numbs'];
                        $total += $price * $item['numbs'];
                        echo '
            <div class="cart-item">
            <img src="public/img/products/' . $item["img"] . '" alt="">
            <div class="title">' . $item["name_products"] . '
            <p>
            ' . number_format(" $price", 0, ",", ".") . ' VNĐ</p>
            </div>
            <div class="option">
       
              <h3>' . $item['numbs'] . '</h3>
            
            </div>
          </div>
            ';
                    }
                }
                ?>






            </div>

        </div>
        <div class="checkout-right">
            <h2>Thông tin thanh toán</h2>
           
            <form action="controller/checkout.php" class="fcheck-out" method="post">

            <div class="total">
                <label>Tổng tiền:</label>
                <label><?php 
                $t = $_SESSION['total'];
                echo number_format("$t", 0, ",", ".") ?> VNĐ
            <input name = "total" value="<?php echo$t; ?>" style="display: none;">    
            </label>
            </div>

                <div><label for="name">
                    Họ và tên:
                </label>
                <input type="text" name= "name" required> </div>
                <div><label for="phone">
                    Số điện thoại:
                </label>
                <input type="text" name= "phone" required> </div>
                <div><label for="email">
                    Email:
                </label>
                <input type="text" name= "email" required> </div>
                <div><label for="loaction">
                    Địa chỉ:
                </label>
                <input type="text" name= "location" required> </div>

                <button type="submit" name= "submit">Thanh toán</button>
                
            </form>
        </div>


    </div>





    <?php
    include_once('view/layouts/footer.php');
    ?>

    <script src="commons/utility/main_script.js"></script>
</body>

</html>