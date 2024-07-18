<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css" >
</head>
<body>
 <div class="form-container">
     <form action="" method="POST" class="form">
            <div>
                <td colspan="2"><h3>Admin Login</h3></td>
            </div>
            <div class="form-row">
                <label class="form-label" for="username">Username:</label>
                <input class="form-input" type="text" name="username">
            </div>
            <div class="form-row">
                <label class="form-label" for="password">Password:</label>
                <input class="form-input" type="password" name="password">
            </div>
            <?php
                session_start();
                include("config/config.php");
                if(isset($_POST['login'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $sql = "select * from admin where username='".$username."' and password='".$password."' limit 1";
                    $row = mysqli_query($connect,$sql);
                    $count = mysqli_num_rows($row);
                    if($count>0){
                        $_SESSION['login'] = $username;
                        header("Location:index.php");
                    }else{
                        echo '<p style="color: red">Mật khẩu hoặc Tài khoản sai !!!</p>';
                    }
                }
            ?>
         <div class="form-button">
             <input type="submit" value="Login" name="login"/>
             <input type="reset" value="Reset" />
         </div>

        </form>
    </div>
</body>
</html>