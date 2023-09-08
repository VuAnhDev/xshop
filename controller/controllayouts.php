<div class="container">
<?php
$page ='';
$key="";

if (!empty($_GET['key'])){
    $key = $_GET['key'];
    $page = "search";
}else{
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }
}

if($page == 'details'){
    include_once("view/pages/details.php");
}

elseif($page == 'danhsach'){
    include_once('view/pages/danhsach.php');
}
elseif($page == 'contact'){
    include_once('view/pages/contact.php');
}
elseif($page == 'search'){
    include_once('view/pages/search.php');
}
elseif($page == 'about'){
    include_once('view/pages/about.php');
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