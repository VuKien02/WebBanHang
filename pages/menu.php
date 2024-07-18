<?php
    $sql = "select * from danhmuc order by iddanhmuc DESC";
    $query = mysqli_query($connect,$sql);


    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<div class="menu">
<div class="menu">
    <ul class="list-menu">
    <li class="menu-item">
            <form action="index.php?quanly=timkiem" method="POST">
                <input type="text" name="key">
                <input type="submit" name="timkiem" value="Tìm">
            </form>
        </li>
        <li class="menu-item"><a href="index.php">Trang chủ</a></li>
        <!-- <?php while($row = mysqli_fetch_array($query)){ ?>
        <li class="menu-item"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['iddanhmuc'] ?>"><?php echo $row['ten'] ?></a></li>
        <?php } ?> -->
        <li class="menu-item"><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <?php
            if(isset($_SESSION['dangky'])){
        ?>
        <li class="menu-item"><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <?php
            }else{
        ?>
        <li class="menu-item"><a href="index.php?quanly=dangky">Đăng ký</a></li>
        <?php
            }
        ?>
        <li class="menu-item"><a href="index.php?quanly=lienhe">Liên hệ</a></li>
        <li class="menu-item"><a href="index.php?quanly=giaidap">Giải đáp</a></li>
    </ul>
</div>
</div>