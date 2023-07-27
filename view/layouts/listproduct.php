<!--------------------List product-------------------->
<div class="list">
    <h2>NEW PRODUCT</h2>


    <?php //list-product
    require_once('model/getproducts.php');
        $producs = getProducts();
    
        foreach ($producs as $item) {

            echo

        '<a href="?page=details&id='. $item["id_product"].'"><div class="item">
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

    ?>
</div>
<ul class="listPage">
        <li>a</li>
</ul>
<script src="commons/utility/paging.js"></script>
<!--------------------end List product-------------------->