<?php
require_once("model/dbhelp/getdata.php");
$id = $_GET['id'];
$sql = "SELECT `cart` FROM oders WHERE id='$id'";
$data = getDataSQL($sql,true);
$arr = json_decode($data[0]['cart'],true);
$total = 0;
echo'
<table  class="tbl-qlsp">
<tr>
<th>ID</th>
<th>Tên sản phẩm</th>
<th>Giá sản phẩm</th>
<th>Ảnh</th>
<th>Số lượng</th>
</tr>';
foreach($arr as $item){
    $total += $item['numbs']*$item['price'];
    echo'
    <tr>
    <td>'.$item['idc'].'</td>
    <td>'.$item['name_products'].'</td>
    <td>'.$item['price'].'</td>
    <td> <img src="public/img/products/'.$item["img"].'" > </td>
    <td>'.$item['numbs'].'</td>
    </tr>';
}
echo "</table>";
echo "<h2>Tổng:".$total."</h2>";