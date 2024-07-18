<h3>Chi tiết sản phẩm</h3>
<?php
$id = $_GET['id'];
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.id='".$id."' limit 1";
    $query = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_array($query)){
?>
<div class="wrapperchitiet">
    <div class="hinhanhsanpham">
            <img width="90%" src="../admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
    </div>
    <form method="POST" action="main/themgiohang.php?id=<?php echo $row['id'] ?>">
    <div class="chitietsanpham">
            <h3 style="margin:0">Tên mẫu xe: <?php echo $row['tensanpham'] ?></h3>
            <p>Mã sản phẩm: <?php echo $row['masanpham'] ?></p>
            <p>Nhà sản xuất: <?php echo $row['nhasanxuat'] ?></p>
            <p>Màu sắc: <?php echo $row['mau'] ?></p>
            <p>Khối lượng: <?php echo $row['khoiluong'] ?></p>
            <p>Dung tích: <?php echo $row['dungtich'] ?></p>
            <p>Động cơ: <?php echo $row['dongco'] ?></p>
            <p>Công suất: <?php echo $row['congsuat'] ?></p>
            <p>Mô-men: <?php echo $row['momen'] ?></p>
            <p>Giá bán: <?php echo number_format($row['gia'],0,',','.').' VNĐ' ?></p>
            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm vào giỏ hàng"></p>
    </div>
    </form>
</div>
<?php } ?>
