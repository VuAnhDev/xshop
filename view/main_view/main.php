<div class="container">
<?php
$page ='';

if (isset($_GET['page'])){
    $page = $_GET['page'];
}

if($page == 'details'){
    include_once("pages/details.php");
}

elseif($page == 'danhsach'){
    include_once('pages/danhsach.php');
}

elseif($page == 'admin'){
    include_once('admin/index.php');
}


else{
    
    include_once('banner.php');
    include_once('listproduct.php');
}



?>

</div>