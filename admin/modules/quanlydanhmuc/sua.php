<?php
    $id = $_GET['iddanhmuc'];
    $sql = "select * from danhmuc where iddanhmuc = '".$id."' limit 1";
    $query = mysqli_query($connect,$sql);
?>
<p>Sửa danh mục sản phẩm</p>
<table width = "100%" border = "1" style="border-collapse: collapse;">
    <form action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>" method="POST" >
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" value="<?php echo $row['ten'] ?>" name="tendanhmuc"></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" value="<?php echo $row['thutu'] ?>" name="thutu"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Sửa danh mục sản phẩm" name="suadanhmuc"></td>
        </tr>
        <?php } ?>
    </form>
</table>