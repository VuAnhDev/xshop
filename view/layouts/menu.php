<ul class="nav">
    <li class="<?php if (!isset($_GET['page'])) {
        echo 'active';
    } ?>">

        <a href="index.php">
            Trang Chủ
        </a>
    </li>
    <li class="<?php if ($_GET['page'] === 'danhsach') {
        echo 'active';
    } ?>">

        <a href="?page=danhsach">
            Danh sách sản phẩm
        </a>
        <ul class="sub-menu">


        </ul>
    </li>
    <li class="<?php if ($_GET['page'] === 'contact') {
        echo 'active';
    } ?>">

        <a href="?page=contact">
            Liên hệ
        </a>
    </li>
</ul>
<script>
    let father = $(".sub-menu");
    let arr = [];
    $.get("model/returnCate.php", function (data) {
       arr.push( data.split("/"));
       arr[0].forEach((value, key) => {
           father.append(`
           <li>
                <a href="?page=danhsach&cate=${value}">${value}</a>
            </li>
           `)
       });
    });

</script>