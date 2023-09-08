<?php
require_once('model/getproducts.php');
$cate = "";
if (isset($_GET["cate"])) {
    $cate = $_GET["cate"];
}
?>
<div class="list">


    <?php
    switch ($cate) {
        case '':
            $producs = getProducts();
            echo '<h2>Danh sách sản phẩm</h2>';




            foreach ($producs as $item) {

                echo

                    '<a href="?page=details&id=' . $item["id_product"] . '"><div class="item">
                        <img src="public/img/products/' . $item["thumbnail"] . '" alt="">
                        <div class="content">
                            <div class="title">
                            ' . $item["name_product"] . '
                            </div>
                            <div class="price">
                            ' . $item["price_product"] . '$
                            </div>
                            </div>
                            </div>
                            </a>';
            }
            ;
            break;

        default:
            $vdanhsach = getCateProducts($cate);
            echo '<h2>Danh sách sản phẩm ' . $cate . '</h2>';

            if (is_null($vdanhsach)) {
                echo "khong co san pham";
            } else {



                foreach ($vdanhsach as $item) {

                    echo

                        '<a href="?page=details&id=' . $item["id_product"] . '"><div class="item">
            <img src="public/img/products/' . $item["thumbnail"] . '" alt="">
                    <div class="content">
                    <div class="title">
                    ' . $item["name_product"] . '
                    </div>
                    <div class="price">
                    ' . $item["price_product"] . '$
                    </div>
                    </div>
                    </div>
                    </a>';
                }
                ;
            }
            break;
    }

    ?>

</div>
<ul class="listPage">
    <li>0</li>
</ul>
<script src="commons/utility/paging.js"></script>