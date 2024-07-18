<h3>Thanh toán đơn hàng</h3>

<?php
    session_start();
    include("../../admin/config/config.php");
    if(isset($_POST['mau'])){
        $_SESSION['mausac'] = $_POST['mau'];
    }
    var_dump($_SESSION['mausac']);

    
    $idkhachhang = $_SESSION['id'];
    $madonhang = rand(0,999999);
    $sql = "insert into giohang (idkhachhang,madonhang,trangthai) value ('".$idkhachhang."', '".$madonhang."', 1)";
    $query = mysqli_query($connect,$sql);
    if($query){
        foreach($_SESSION['cart'] as  $id => $cart_item){
            $idsanham = $cart_item['id'];
            $mau_sanpham = isset($_SESSION['mausac'][$idsanham]) ? $_SESSION['mausac'][$idsanham] : '';
            $soluong = $cart_item['soluong'];
            $sql2 = "insert into donhang (madonhang,idsanpham,soluongsp,mau) value ('".$madonhang."', '".$idsanham."', '".$soluong."', '".$mau_sanpham."')";
            mysqli_query($connect,$sql2);
        }
    }
    //unset($_SESSION['cart']);
    unset($_SESSION['mausac']);
    header("Location:../index.php?quanly=camon");
?>