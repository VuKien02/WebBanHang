<?php
    if(isset($_POST['timkiem'])){
        $key = $_POST['key'];
    }
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc and sanpham.tensanpham like '%".$key."%'";
    $query = mysqli_query($connect,$sql);
?>
<h3>Tìm kiếm : <?php echo $_POST['key']?></h3>
<ul class="product-list">
    <?php
        while ($row = mysqli_fetch_array($query)){
    ?>
    <li class="product-item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id'] ?>">
            <img src="../admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
            <p class="title-product">Mẫu xe: <?php echo $row['tensanpham'] ?></p>
            <p class="price-product">Giá: <?php echo number_format($row['gia'],0,',','.').' VNĐ' ?></p>
            <p class="cate-product" style="text-align: center; color: #d1d1d1">Danh mục: <?php echo $row['ten'] ?></p>
        </a>
    </li>
    <?php } ?>
</ul>