<?php
require_once("../../model/config/config.php");
require_once("../../model/oders.php");
$id;
if(!empty($_POST['delete'])){
$id = $_POST['delete'];
delOder($id);
header("location:../../index.php?page=admin&option=qlod");
exit;

}
if(isset($_POST['view'])){
    $id=$_POST['view'];
    header("location:../../index.php?page=admin&option=viewcart&id=".$id);
    exit;
}