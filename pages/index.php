<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web bán xe máy online</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" >
    <link rel="stylesheet" type="text/css" href="../css/phantrang.css" >
    <link rel="stylesheet" type="text/css" href="../css/giohang.css" >
    <link rel="stylesheet" type="text/css" href="../css/chitietsanpham.css" >
    <link rel="stylesheet" type="text/css" href="../css/giaidap.css" >
    <link rel="stylesheet" type="text/css" href="../css/dangky.css" >
    <link rel="stylesheet" type="text/css" href="../css/dangnhap.css" >
    <!--Font awesome-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
</head>
<body>
    <div class="wrapper">
        <?php
            session_start();
            include("../admin/config/config.php");
            include("header.php");
            include("menu.php");
            include("main.php");
            include("footer.php");
        ?>
    </div>
</body>
</html>