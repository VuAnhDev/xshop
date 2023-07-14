<?php

if(isset($_GET['action'])){
    $action = $_GET['action'];

    if ($action == 'qlsp'){
        include_once('qlsp.php');
    }
    elseif($action == 'qldm'){
        include_once('qldm.php');
    }
    
    elseif($action == 'qltk'){
        include_once('qltk.php');
    }
}