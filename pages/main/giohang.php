<h3>Giỏ hàng của:
    <?php
        if(isset($_SESSION['dangky'])){
            echo '<span style="color: blue">'.$_SESSION['dangky'].'</span>';
        }
    ?>
</h3>
<style>

</style>
<form method="POST" action="main/thanhtoan.php">
<?php
    if(isset($_SESSION['cart'])){
        
    }
?>
<table style="width: 100%; text-align: center; border-collapse: collapse;" border="1">
    <tr>
        <th>ID</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Màu sắc</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>
    <?php
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                if(isset($cart_item['soluong']) && isset($cart_item['gia'])){
                    $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
                    $tongtien += $thanhtien;
                } else {
                    $thanhtien = 0;
                }
                $i ++;
                $id = $cart_item['id'];
                $sql="select * from sanpham where id = $id";
                $query = mysqli_query($connect,$sql);
                $row = mysqli_fetch_array($query);
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $cart_item['masanpham'] ?></td>
        <td><?php echo $cart_item['tensanpham'] ?> (<?php echo $row['mau']?>) </td>
        <td><img src="../admin/modules/quanlysanpham/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="" width="150px"></td>
        <td>
            <a href="main/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a>
            <?php echo $cart_item['soluong'] ?>
            <a href="main/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>
        </td>
        <td><input type="text" id="mau" name="mau[<?php echo $cart_item['id']; ?>]" style="width:50px"></td>
        <td><?php echo number_format($cart_item['gia'],0,',','.').' VNĐ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').' VNĐ' ?></td>
        <td><a href="main/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan="9">
            <p style="float: left">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' VNĐ'?></p>
            <p style="float: right"><a href="main/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>   
            <div style="clear: both">
                <?php
                    if(isset($_SESSION['dangky'])){
                ?>
                        <p><input type="submit" value="Đặt hàng" style="background-color: #4CAF50;color: white;padding: 10px 20px;border: none;border-radius: 5px;cursor: pointer;"></p>
                <?php        
                    }else{ 
                ?>
                        <p><a href="index.php?quanly=dangky">Đăng ký để đặt hàng</a></p>
                <?php
                    }
                ?>
                
            </div>
        </td>
    </tr>
    <?php        
        }else{
    ?>
    <tr>
        <td colspan="8"><p>Giỏ hàng trống</p></td>
    </tr>
    <?php } ?>
</table></form>