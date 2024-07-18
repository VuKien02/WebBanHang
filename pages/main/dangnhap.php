<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $phone = $_POST['sodienthoai'];
        $sql = "select * from dangky where email='".$email."' and matkhau='".$password."' and sodienthoai='".$phone."' limit 1";
        $row = mysqli_query($connect,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id'] = $row_data['id'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p style="color: red">Mật khẩu hoặc email sai !!!</p>';
        }
    }
?>
<h3>Đăng nhập khách hàng</h3>
<style type="text/css">
    .khachhanglogin tr td{
        padding: 5px;
    }
</style>
<form action="" method="POST" autocomlete="off">
    <table class="khachhanglogin" border="1" width="50%" style="border-collapse: collapse">
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
            <td>Mật khẩu</td>
            <td>
                <input type="password" name="password" size="50">
            </td>
        </tr>
        
        <tr>
        <td colspan="2">
            <input type="submit" name="dangnhap" value="Đăng nhập">
            <a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a>
        </td>
        </tr>
    </table>
</form>