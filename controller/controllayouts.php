<div class="container">
<?php
$page ='';

if (isset($_GET['page'])){
    $page = $_GET['page'];
}

if($page == 'details'){
    include_once("view/pages/details.php");
}

elseif($page == 'danhsach'){
    include_once('view/pages/danhsach.php');
}

elseif($page == 'admin'){
    include_once('view/admin/index.php');
}


else{
    
    include_once('view/layouts/banner.php');
    include_once('view/layouts/listproduct.php');
    
}



?>

</div>