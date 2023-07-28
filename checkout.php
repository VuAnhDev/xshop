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
              <a>-</a>
              <h3>' . $item['numbs'] . '</h3>
              <a>+</a>
            </div>
          </div>
            ';
                    }
                }
                ?>






            </div>

        </div>
        <div class="checkout-right">
            
        </div>


    </div>





    <?php
    include_once('view/layouts/footer.php');
    ?>

    <script src="commons/utility/main_script.js"></script>
</body>

</html>