<h3>Liên hệ</h3>
<?php
    if(isset($_POST['gui'])){
        $tenkhachhang = $_POST['hoten'];
        $email = $_POST['email'];
        $sodienthoai = $_POST['sodienthoai'];
        $noidung = $_POST['message']; 
        if($_POST['hoten']=="" || $_POST['email']=="" || $_POST['sodienthoai']=="" || $_POST['message']==""){
            echo '<p style="color: red">Chưa nhập đủ thông tin !!!</p>';
        }else{
                $sql = "insert into lienhe(hoten,email,sodienthoai,noidung) value ('".$tenkhachhang."', '
                .................... ".$email."', '".$sodienthoai."', '".$noidung."')";
                $query = mysqli_query($connect,$sql);
                if($query){
                    echo '<p style="color: green">Gửi thành công !!!</p>';
                }else{
                    echo '<p style="color: red">Gửi thất bại !!!</p>';
                }
        }

    }
?>
<form action="" method="POST" autocomlete="off">
    <table class="khachhanglogin" border="1" width="50%" style="border-collapse: collapse">
        <tr>
            <td style="padding: 10px;">Họ & tên</td>
            <td>
                <input type="text" name="hoten" size="50" style="width: 100%;padding: 8px;box-sizing: border-box;margin-bottom: 10px;">
            </td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td>
                <input type="text" name="sodienthoai" size="50" style="width: 100%;padding: 8px;box-sizing: border-box;margin-bottom: 10px;">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <input type="email" name="email" size="50" style="width: 100%;padding: 8px;box-sizing: border-box;margin-bottom: 10px;">
            </td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td>
                <textarea type="message" name="message" size="50" rows="6" cols="50"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="gui" value="Gửi">
            </td>
        </tr>
    </table>
</form>