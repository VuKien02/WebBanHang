<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/styleadmin.css" >
    <link rel="stylesheet" type="text/css" href="../css/admin_table.css" >
</head>
<body>
    <h3 class="title-admin">Chào mừng tới trang quản lý</h3>
    <div class="wrapper">
        <?php
            include("config/config.php");
            include("modules/header.php");
            include("modules/menu.php");
            include("modules/main.php");
            include("modules/footer.php");
        ?>
    </div>
</body>
</html>