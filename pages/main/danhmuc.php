<?php
    $id = $_GET['id'];
    $sql1 = "select * from sanpham where iddanhmuc='".$id."' order by sanpham.id DESC";
    $query1 = mysqli_query($connect,$sql1);

    $sql2 = "select * from danhmuc where iddanhmuc='".$id."' limit 1";
    $query2 = mysqli_query($connect,$sql2);
    $rowtittle = mysqli_fetch_array($query2);
?>

<h3>Xe máy: <?php echo $rowtittle['ten'] ?></h3>
<ul class="product-list">
    <?php
        while($row = mysqli_fetch_array($query1)){
    ?>
    <li class="product-item">
        <a href="index.php?quanly=sanpham&id=<?php echo $row['id'] ?>">
            <img src="../admin/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" alt="">
                <p class="title-product">Mẫu xe: <?php echo $row['tensanpham'] ?></p>
                <p class="price-product">Giá: <?php echo number_format($row['gia'],0,',','.').' vnđ' ?></p>
        </a>
    </li>
    <?php } ?>
</ul>