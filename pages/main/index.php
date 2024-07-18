<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = 1;
}
if($page == '' || $page == 1){
    $begin = 0;
}else{
    $begin = ($page*10)-10;
}
    $sql = "select * from sanpham,danhmuc where sanpham.iddanhmuc=danhmuc.iddanhmuc order by sanpham.id DESC limit $begin,10";
    $query = mysqli_query($connect,$sql);
?>
<h3>Sản phẩm mới nhất</h3>
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
<div style="clear:both"> </div>
<div>
    <p>Trang: <?php echo $page?></p>
    <?php
        $sql2 =  "select * from sanpham";
        $query2 = mysqli_query($connect,$sql2);
        $row = mysqli_num_rows($query2);
        $trang = ceil($row/6);
    ?>
    <ul class="list_page">
        <?php
            for($i=1;$i<=$trang;$i++){
        ?>
        <li class="list_item" <?php if($i==$page){echo 'style="background:gray"';}else{echo '';}?>><a href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
        <?php } ?>
    </ul>
</div>
                
                