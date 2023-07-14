<div class="list">
    <h2>NEW PRODUCT</h2>


    <?php //list-product
    require_once('model/list_products.php');
       getProducts('');
    ?>
</div>
<ul class="listPage">
        <li>0</li>
</ul>
<script src="view/js/paging.js"></script>