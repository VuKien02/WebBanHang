<?php
    $sql = "select * from danhmuc order by thutu DESC";
    $query = mysqli_query($connect,$sql);
?>

<p>Liệt kê danh mục sản phẩm</p>
<table width = "100%" border = "1" style="border-collapse: collapse;">
    <form action="modules/quanlydanhmuc/xuly.php" method="POST">
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Chức năng</th>
        </tr>
        <?php
        $i = 0;
        while($row = mysqli_fetch_array($query)){
            $i++;
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $row['ten']?></td>
                <td>
                    <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['iddanhmuc']?>">Sửa</a> | 
                    <a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['iddanhmuc']?>">Xóa</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </form>
</table>