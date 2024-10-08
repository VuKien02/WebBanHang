<?php
    session_start();
    include('../../admin/config/config.php');
    //Xóa giỏ hàng
    if(isset($_GET['xoatatca']) && $_GET['xoatatca']==1){
        unset($_SESSION['cart']);
        header('Location:../index.php?quanly=giohang');
    }
    //Xóa sản phẩm: đi duyệt mang, bỏ qua phần tử có id với phần tử bị xóa, kết thúc vòng lặp in lại các sản phẩm đã duyệt.
    if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
            }
            $_SESSION['cart'] = $product;
            header('Location:../index.php?quanly=giohang');
        }
        
    }

    //Tăng giảm số lượng.
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        foreach($_SESSION['cart'] as $cart_item){
            //Khi không kích vào dấu công thì mang san phẩm sẽ được giữ nguyên.
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong']+1;
                //khi cộng sản phẩm sẽ tạo 1 mảng mới với số lượng sản phẩm được thay đổi.
                if($cart_item['soluong']<=99){
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                }else{
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                }
                $_SESSION['cart'] = $product;
            }
            header('Location:../index.php?quanly=giohang');
        }
    }

    if(isset($_GET['tru'])){
        $id = $_GET['tru'];
        foreach($_SESSION['cart'] as $cart_item){
            //Khi không kích vào dấu công thì mang san phẩm sẽ được giữ nguyên.
            if($cart_item['id']!=$id){
                $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                $_SESSION['cart'] = $product;
            }
            else{
                $tangsoluong = $cart_item['soluong']-1;
                //khi trừ sản phẩm sẽ tạo 1 mảng mới với số lượng sản phẩm được thay đổi.
                if($cart_item['soluong']>=1){
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                }else{
                    $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                    ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                }
                $_SESSION['cart'] = $product;
            }
            header('Location:../index.php?quanly=giohang');
        }
    }

    //Thêm sản phẩm
    if(isset($_POST['themgiohang'])){
        $id = $_GET['id'];
        $soluong = 1;
        $sql = "select * from sanpham where id='".$id."' limit 1";
        $query = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($query);
        if($row){
            $new [] = array('tensanpham'=>$row['tensanpham'],'id'=>$id,'soluong'=>$soluong,'gia'=>$row['gia'],'hinhanh'=>$row['hinhanh']
            ,'masanpham'=>$row['masanpham']);
            /* Kiểm tra Session giỏ hàng */
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    /* Nếu dữ liệu bị trùng */
                    if($cart_item['id']==$id){
                        $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'gia'=>$cart_item['gia']
                        ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                        $found = true;
                    }else{
                        /* Nếu dữ liệu không trùng */
                        $product [] = array('tensanpham'=>$cart_item['tensanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia']
                        ,'hinhanh'=>$cart_item['hinhanh'],'masanpham'=>$cart_item['masanpham']);
                    }
                }
                if($found == false){
                    /* Liên kết dữ liệu */
                    $_SESSION['cart']=array_merge($product,$new);
                }else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] = $new;
            }
        }
        header('Location:../index.php?quanly=giohang');
    }

?>