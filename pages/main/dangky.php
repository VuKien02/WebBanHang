<h3>Đăng ký</h3>
<?php
    if(isset($_POST['dangky'])){
        if(isset($_POST['hoten'])){
            $tenkhachhang = $_POST['hoten'];
        }
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        if(isset($_POST['sodienthoai'])){
            $sodienthoai = $_POST['sodienthoai'];
        }
        if(isset($_POST['diachi'])){
            $diachi = $_POST['diachi'];
        }
        if(isset( $_POST['matkhau'])){
            $tenkhachhang = md5($_POST['matkhau']);
        }
        if(isset( $_POST['ktmk'])){
            $tenkhachhang = md5($_POST['ktmk']);
        }
        

        $select_name = mysqli_query($connect,"select * from dangky where tenkhachhang like '%$tenkhachhang%'");
        $select_email = mysqli_query($connect,"select * from dangky where email like '%$email%'");
        if(mysqli_num_rows($select_name) > 0){
            echo '<p style="color: red">Tên người dùng đã tồn tại !!!</p>';
        }else if(mysqli_num_rows($select_email) > 0){
            echo '<p style="color: red">Email đã tồn tại !!!</p>';
        }else if($_POST['hoten']=="" || $_POST['email']=="" || $_POST['sodienthoai']=="" || $_POST['diachi']=="" || $_POST['matkhau']==""){
            echo '<p style="color: red">Chưa nhập đủ thông tin !!!</p>';
        }else{
            if($matkhau == $kiemtramatkhau){
                $sql = "insert into dangky(tenkhachhang,email,sodienthoai,diachi,matkhau) value ('".$tenkhachhang."', '".$email."', '".$sodienthoai."', '".$diachi."', '".$matkhau."')";
                $query = mysqli_query($connect,$sql);
                if($query){
                    echo '<p style="color: green">Bạn đã đăng ký thành công !!!</p>';
                    $_SESSION['dangky'] = $tenkhachhang;
                    $_SESSION['id'] = mysqli_insert_id($connect); //Lấy id khách hàng để thanh toán
                    header('Location:index.php?quanly=giohang');
                }
            }else{
                echo '<p style="color: red">Xác nhận mật khẩu sai !!!</p>';
            }
        }

    }
?>
<style type="text/css">
    .dangky tr td{
        padding: 5px;
    }
</style>
<form action="" method="POST">
    <table class="dangky" border="1" width="50%" style="border-collapse: collapse">
        <tr>
            <td>Họ & tên</td>
            <td>
                <input type="text" name="hoten" size="50">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" size="50">
            </td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>
                <input type="text" name="sodienthoai" size="50">
            </td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="diachi" size="50">
            </td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td>
                <input type="password" name="matkhau" size="50">
            </td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu</td>
            <td>
                <input type="password" name="ktmk" size="50">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="dangky" value="Đăng ký">
                <a href="index.php?quanly=dangnhap">Đăng nhập</a>
            </td>
        </tr>
    </table>
</form>