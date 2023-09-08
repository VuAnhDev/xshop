<?php
include_once("model/dbhelp/getdata.php");
$sql = "SELECT * FROM oders";
$data = getDataSQL($sql);
?>

<form action="controller/admin/qlod.php" method="POST" class="admin-form">
    <h2 class="messs">
        <?php
        if (isset($_SESSION['thongbao'])) {
            echo $_SESSION['thongbao'];
            unset($_SESSION['thongbao']);
        }
        ?>
    </h2>
    <table class="admin-table">
        <tr>
            <th>ID</th>
            <th>Tên tài khoản đặt</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Tên email</th>
            <th>Tên địa chỉ</th>
            <th>Trạng thái</th>
        </tr>
        <?php
        if (!is_null($data)) {
            foreach ($data as $item) {
                $id = $item['id'];
                $name = $item['username'];
                $value = json_decode($item['value'], true);
                $status = $item['status'];
                echo '<tr>
      <td>' . $id . '</td>
      <td>' . $name . '</td>';
                foreach ($value as $value) {
                    $s = mb_convert_encoding($value, 'UTF-8','ISO-8859-1');
                    echo "<td>"  .$s. "</td>";
                }
                ?>
                <td>

                    <select name="status">
                        <option value="1"  <?php if ($status === '1') {
                            echo "selected";
                        } ?>>Đặt hàng</option>
                        <option value="2" <?php if ($status === '2') {
                            echo "selected";
                        } ?>>Giao hàng</option>
                        <option value="3" <?php if ($status === '3') {
                            echo "selected";
                        } ?>>Hoàn thành</option>
                    </select>
                </td>
                <td>
                    <button value="<?php echo $id ?>" name="delete" type="submit">Xóa</button>
                </td>
                <td>
                    <button value="<?php echo $id ?>" name="view" type="submit">Xem chi tiết đơn hàng</button>
                </td>
                <?php
                echo "</tr>";
            }
        }else {
            echo"Không có đơn hàng";
        }
        ?>
    </table>
</form>